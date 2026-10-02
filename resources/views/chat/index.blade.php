@extends('layouts.app')

@section('title', 'Chat - Mahsoul Assistant')

@section('content')
<div class="min-h-screen bg-sand">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="mb-8 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="eco-eyebrow mb-3">Mahsoul Assistant</span>
                <h1 class="font-display text-3xl font-extrabold text-forest">Mahsoul Assistant</h1>
                <p class="text-clay mt-2">Votre assistant agricole intelligent, alimenté par l'IA</p>
            </div>
            <button onclick="startNewConversation()" class="btn-sun shrink-0">
                <i class="fas fa-plus mr-2"></i>Nouvelle conversation
            </button>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <!-- Sidebar: Conversations List -->
            <div class="lg:col-span-1">
                <div class="card-eco bg-white overflow-hidden">
                    <div class="p-5 border-b border-earth-200 flex items-center justify-between">
                        <h2 class="font-display font-bold text-forest">Conversations</h2>
                    </div>
                    <div class="p-4">
                        <div id="conversations-list" class="space-y-2">
                            @foreach($conversations as $conversation)
                            <button 
                                onclick="loadConversation({{ $conversation->id }})"
                                class="w-full text-left p-4 rounded-2xl transition-all hover:bg-cream/50 border border-earth-100 hover:border-leaf/30 {{ $conversation->id == ($currentConversation->id ?? 0) ? 'border-leaf bg-leaf/10' : '' }}"
                                id="conv-{{ $conversation->id }}"
                            >
                                <h3 class="font-semibold text-forest truncate">{{ $conversation->title }}</h3>
                                <p class="text-sm text-clay mt-1 truncate">{{ $conversation->latestMessage?->content ?? 'Nouvelle conversation' }}</p>
                                <p class="text-xs text-earth-400 mt-1">{{ $conversation->updated_at->diffForHumans() }}</p>
                            </button>
                            @endforeach
                        </div>
                        
                        @if($conversations->isEmpty())
                        <p class="text-center text-clay py-8">Aucune conversation. Commencez une nouvelle discussion !</p>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Chat Area -->
            <div class="lg:col-span-3 flex flex-col h-[calc(100vh-200px)]">
                <!-- Chat Header -->
                <div id="chat-header" class="card-eco bg-white p-4 border-b border-earth-200">
                    @if(isset($currentConversation))
                    <div class="flex items-center gap-4">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-12 rounded-xl bg-forest/10 flex items-center justify-center">
                                <i class="fas fa-robot text-forest text-xl"></i>
                            </div>
                            <div>
                                <h2 class="font-display text-xl font-bold text-forest">{{ $currentConversation->title }}</h2>
                                <p class="text-sm text-clay">{{ $currentConversation->messages->count() }} messages</p>
                            </div>
                        </div>
                        <div class="ml-auto flex gap-2">
                            <button onclick="updateConversationTitle()" class="px-3 py-1.5 bg-leaf/10 text-leaf text-sm font-medium rounded-full hover:bg-leaf/20 transition">
                                <i class="fas fa-edit mr-1"></i>Renommer
                            </button>
                            <button onclick="deleteConversation()" class="px-3 py-1.5 bg-rose-50 text-rose-600 text-sm font-medium rounded-full hover:bg-rose-100 transition">
                                <i class="fas fa-trash mr-1"></i>Supprimer
                            </button>
                        </div>
                    </div>
                    @else
                    <div class="text-center py-8">
                        <i class="fas fa-robot text-forest/30 text-5xl mb-3"></i>
                        <h2 class="font-display text-xl font-bold text-forest mb-2">Bienvenue sur Mahsoul Assistant</h2>
                        <p class="text-clay">Sélectionnez une conversation ou créez-en une nouvelle pour commencer</p>
                    </div>
                    @endif
                </div>

                <!-- Chat Messages -->
                <div id="chat-messages" class="flex-1 overflow-y-auto p-4 space-y-4" style="max-height: calc(100vh - 300px);">
                    @if(isset($currentConversation))
                        @foreach($currentConversation->messages as $message)
                        <div class="flex {{ $message->role === 'user' ? 'justify-end' : 'justify-start' }}">
                            <div class="max-w-[70%] {{ $message->role === 'user' ? 'order-2' : 'order-1' }}">
                                @if($message->role === 'assistant')
                                <div class="flex items-start gap-2">
                                    <div class="w-8 h-8 rounded-full bg-forest/10 flex items-center justify-center flex-shrink-0">
                                        <i class="fas fa-robot text-forest"></i>
                                    </div>
                                    <div class="bg-white rounded-2xl rounded-bl-sm px-4 py-3 shadow-sm">
                                        <p class="text-clay">{{ nl2br(e($message->content)) }}</p>
                                        @if($message->metadata && $message->metadata['sources'])
                                        <div class="mt-2 pt-2 border-t border-earth-100">
                                            <p class="text-xs text-earth-500 mb-1">Sources :</p>
                                            <div class="flex flex-wrap gap-1">
                                                @foreach($message->metadata['sources'] as $source)
                                                <span class="px-2 py-0.5 bg-leaf/10 text-leaf text-xs rounded-full">{{ $source['title'] }}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                @else
                                <div class="bg-forest text-white rounded-2xl rounded-br-sm px-4 py-3 max-w-[70%]">
                                    <p>{{ nl2br(e($message->content)) }}</p>
                                </div>
                                @endif
                            </div>
                        @endforeach
                    @else
                    <div class="flex flex-col items-center justify-center h-full text-clay">
                        <i class="fas fa-robot text-forest/20 text-6xl mb-4"></i>
                        <p class="text-center">Sélectionnez une conversation ou créez-en une nouvelle pour commencer</p>
                    @endif
                </div>

                <!-- Input Area -->
                <div class="card-eco bg-white p-4 border-t border-earth-200">
                    <form id="chat-form" onsubmit="sendMessage(event)">
                        <div class="flex gap-3">
                            <div class="relative flex-1">
                                <textarea 
                                    id="message-input" 
                                    name="message" 
                                    rows="1" 
                                    placeholder="Posez votre question agricole..." 
                                    class="w-full px-4 py-3 input-eco resize-none"
                                    style="max-height: 120px;"
                                ></textarea>
                            </div>
                            <button type="submit" class="btn-eco shrink-0 px-6 py-3" id="send-btn">
                                <i class="fas fa-paper-plane mr-2"></i>Envoyer
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
let currentConversationId = {{ $currentConversation->id ?? 'null' }};

async function loadConversation(id) {
    currentConversationId = id;
    const response = await fetch(`/chat/${id}`);
    const data = await response.json();
    
    // Update URL without reload
    window.history.pushState({}, '', `/chat/${id}`);
    
    // Reload page to show new conversation
    window.location.href = `/chat/${id}`;
}

function startNewConversation() {
    window.location.href = '/chat/create';
}

async function sendMessage(event) {
    event.preventDefault();
    
    const input = document.getElementById('message-input');
    const sendBtn = document.getElementById('send-btn');
    const message = input.value.trim();
    
    if (!message) return;
    
    sendBtn.disabled = true;
    sendBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Envoi...';
    
    try {
        const formData = new FormData();
        formData.append('message', message);
        formData.append('conversation_id', currentConversationId);
        formData.append('_token', document.querySelector('meta[name="csrf-token"]').content);
        
        const response = await fetch('/chat', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'X-Requested-With': 'XMLHttpRequest'
            }
        });
        
        const data = await response.json();
        
        if (response.ok) {
            // Reload to show new messages
            window.location.reload();
        } else {
            alert('Erreur lors de l\'envoi du message');
        }
    } catch (error) {
        console.error(error);
        alert('Erreur de connexion');
    } finally {
        input.value = '';
        sendBtn.disabled = false;
        sendBtn.innerHTML = '<i class="fas fa-paper-plane mr-2"></i>Envoyer';
    }
}

function startNewConversation() {
    window.location.href = '/chat/create';
}

async function loadConversation(id) {
    window.location.href = `/chat/${id}`;
}

function updateConversationTitle() {
    const newTitle = prompt('Nouveau titre :');
    if (newTitle) {
        const formData = new FormData();
        formData.append('title', newTitle);
        formData.append('_token', document.querySelector('meta[name="csrf-token"]').content);
        formData.append('_method', 'PUT');
        
        await fetch(`/chat/${currentConversationId}`, {
            method: 'POST',
            body: formData
        });
        window.location.reload();
    }
}

function deleteConversation() {
    if (confirm('Supprimer cette conversation ?')) {
        const formData = new FormData();
        formData.append('_token', document.querySelector('meta[name="csrf-token"]').content);
        formData.append('_method', 'DELETE');
        
        await fetch(`/chat/${currentConversationId}`, {
            method: 'POST',
            body: formData
        });
        window.location.href = '/chat';
    }
}

// Auto-resize textarea
document.getElementById('message-input')?.addEventListener('input', function() {
    this.style.height = 'auto';
    this.style.height = Math.min(this.scrollHeight, 120) + 'px';
});

// Enter to send, Shift+Enter for new line
document.getElementById('message-input')?.addEventListener('keydown', function(e) {
    if (e.key === 'Enter' && !e.shiftKey) {
        e.preventDefault();
        sendMessage(e);
    }
});
</script>
@endpush