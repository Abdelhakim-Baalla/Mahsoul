<?php

namespace App\Http\Controllers;

use App\Models\ChatConversation;
use App\Models\ChatMessage;
use App\Models\KnowledgeBase;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $conversations = Auth::user()->chatConversations()
            ->active()
            ->with(['latestMessage'])
            ->latest()
            ->paginate(20);

        return view('chat.index', compact('conversations'));
    }

    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'message' => 'required|string|max:5000',
            'conversation_id' => 'nullable|exists:chat_conversations,id',
        ]);

        $user = Auth::user();

        if ($request->conversation_id) {
            $conversation = ChatConversation::where('id', $request->conversation_id)
                ->where('user_id', Auth::id())
                ->firstOrFail();
        } else {
            $conversation = ChatConversation::create([
                'user_id' => Auth::id(),
                'title' => Str::limit($request->message, 50),
                'status' => 'active',
            ]);
        }

        // Save user message
        $userMessage = $conversation->messages()->create([
            'role' => 'user',
            'content' => $request->message,
        ]);

        // Get AI response via RAG
        $aiResponse = $this->getAIResponse($request->message, $conversation);

        // Save assistant message
        $assistantMessage = $conversation->messages()->create([
            'role' => 'assistant',
            'content' => $aiResponse['content'],
            'metadata' => [
                'model' => $aiResponse['model'] ?? 'gpt-4o-mini',
                'tokens_used' => $aiResponse['tokens_used'] ?? 0,
                'sources' => $aiResponse['sources'] ?? [],
            ]
        ]);

        // Update conversation title if it's the first message
        if ($conversation->messages()->count() === 2) {
            $conversation->update([
                'title' => Str::limit($request->message, 50),
            ]);
        }

        return response()->json([
            'conversation_id' => $conversation->id,
            'user_message' => $userMessage,
            'assistant_message' => $assistantMessage,
        ]);
    }

    public function show(ChatConversation $conversation): JsonResponse
    {
        if ($conversation->user_id !== Auth::id()) {
            abort(403);
        }

        $conversation->load(['messages' => fn($q) => $q->orderBy('created_at')]);

        return response()->json($conversation);
    }

    public function updateTitle(Request $request, $id): JsonResponse
    {
        $conversation = ChatConversation::where('id', $request->conversation_id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $conversation->update(['title' => $request->title]);

        return response()->json(['title' => $conversation->title]);
    }

    public function destroy($id): JsonResponse
    {
        $conversation = ChatConversation::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $conversation->delete();

        return response()->json(['success' => true]);
    }

    /**
     * Get AI response using RAG (Retrieval-Augmented Generation)
     */
    private function getAIResponse(string $question, \App\Models\ChatConversation $conversation): array
    {
        // 1. Search relevant knowledge base entries
        $relevantDocs = $this->searchKnowledgeBase($question);

        // 2. Build context from conversation history
        $history = $this->getConversationHistory($conversation);

        // 3. Build prompt with context
        $prompt = $this->buildPrompt($question, $conversation, $relevantDocs);

        // 4. Call OpenAI API
        $response = $this->callOpenAI($prompt);

        return [
            'content' => $response['content'] ?? "Désolé, je n'ai pas pu générer de réponse.",
            'model' => 'gpt-4o-mini',
            'tokens_used' => $response['usage']['total_tokens'] ?? 0,
            'sources' => $this->extractSources($relevantDocs),
        ];
    }

    private function searchKnowledgeBase(string $question): array
    {
        // Simple keyword search for now
        // In production, use vector similarity search with embeddings
        $query = Str::words($question, 10);
        
        return KnowledgeBase::active()
            ->where(function ($q) use ($query) {
                foreach ($query as $word) {
                    $q->orWhere('title', 'like', "%{$word}%")
                      ->orWhere('content', 'like', "%{$word}%")
                      ->orWhere('tags', 'like', "%{$word}%");
                }
            })
            ->orderBy('updated_at', 'desc')
            ->take(5)
            ->get()
            ->toArray();
    }

    private function getConversationHistory(\App\Models\ChatConversation $conversation): array
    {
        return $conversation->messages()
            ->orderBy('created_at')
            ->take(10)
            ->get()
            ->map(fn($m) => [
                'role' => $m->role,
                'content' => $m->content,
            ])
            ->toArray();
    }

    private function buildPrompt(string $question, \App\Models\ChatConversation $conversation, array $relevantDocs): array
    {
        $systemPrompt = "Vous êtes Mahsoul Assistant, un assistant agricole expert pour la plateforme Mahsoul. 
        Vous aidez les agriculteurs marocains avec des conseils sur l'agriculture, l'élevage, l'irrigation, 
        les maladies des plantes, la commercialisation, etc. Répondez en français, de manière claire et pratique.
        
        Contexte disponible :
        " . collect($relevantDocs)->map(fn($d) => "- {$d['title']}: {$d['content']}")->implode("\n") . "
        
        Historique de conversation récent :
        " . collect($this->getConversationHistory($conversation))->map(fn($m) => $m['role'] . ': ' . $m['content'])->implode("\n") . "
        
        Répondez de manière concise, pratique et bienveillante. Si vous ne savez pas, dites-le honnêtement.";

        return [
            ['role' => 'system', 'content' => $systemPrompt],
            ['role' => 'user', 'content' => $question],
        ];
    }

    private function extractSources(array $docs): array
    {
        return collect($docs)->map(fn($d) => [
            'title' => $d['title'],
            'type' => $d['type'],
            'category' => $d['category'],
        ])->toArray();
    }

    private function callOpenAI(array $messages): array
    {
        if (!config('services.openai.key')) {
            return [
                'content' => "Configuration OpenAI manquante. Veuillez configurer OPENAI_API_KEY dans .env",
                'usage' => ['total_tokens' => 0],
            ];
        }

        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . config('services.openai.key'),
                'Content-Type' => 'application/json',
            ])->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-4o-mini',
                'messages' => $messages,
                'temperature' => 0.7,
                'max_tokens' => 1000,
            ]);

            if (!$response->successful()) {
                return [
                    'content' => "Erreur API OpenAI: " . $response->body(),
                    'usage' => ['total_tokens' => 0],
                ];
            }

            return $response->json();
        } catch (\Exception $e) {
            return [
                'content' => "Erreur de connexion: " . $e->getMessage(),
                'usage' => ['total_tokens' => 0],
            ];
        }
    }
}