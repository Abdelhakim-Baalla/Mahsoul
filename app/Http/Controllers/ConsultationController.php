<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\ExpertReview;
use App\Repositories\Interfaces\AgricoleRepositoryInterface;
use App\Repositories\Interfaces\DocumentRepositoryInterface;
use App\Repositories\Interfaces\RendezVousRepositoryInterface;
use App\Repositories\Interfaces\UtilisateurRepositoryInterface;
use App\Repositories\Interfaces\VeterinaireRepositoryInterface;
use Illuminate\Http\Request;

use PDF;

class ConsultationController extends Controller
{
    protected $agricoleRepository;
    protected $veterinaireRepository;
    protected $utilisateurRepository;
    protected $rendezVousRepository;
    protected $documentRepository;

    public function __construct(DocumentRepositoryInterface $documentRepository, RendezVousRepositoryInterface $rendezVousRepository, VeterinaireRepositoryInterface $veterinaireRepository, UtilisateurRepositoryInterface $utilisateurRepository, AgricoleRepositoryInterface $agricoleRepository)
    {
        $this->middleware('auth')->only(['createRendezVous', 'payementRendezVous', 'expertReviewStore']);
        $this->agricoleRepository = $agricoleRepository; 
        $this->veterinaireRepository = $veterinaireRepository; 
        $this->utilisateurRepository = $utilisateurRepository; 
        $this->rendezVousRepository = $rendezVousRepository; 
        $this->documentRepository = $documentRepository; 
    }

    public function index()
    {
        return view('consultation');
    }

    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'firstName' => 'required|string|max:255',
    //         'lastName' => 'required|string|max:255',
    //         'email' => 'required|email',
    //         'phone' => 'required|string',
    //         'consultationType' => 'required|in:agricultural,veterinary',
    //         'description' => 'required|string',
    //         'date' => 'required|date',
    //         'timeSlot' => 'required|string'
    //     ]);

    //     $consultation = Consultation::create($validated);

    //     return response()->json([
    //         'success' => true,
    //         'message' => 'Consultation réservée avec succès',
    //         'data' => $consultation
    //     ]);
    // }

    public function AfficherExperts()
    {
        $agricoles = $this->agricoleRepository->getAllAgricole();
        $veterinaires = $this->veterinaireRepository->getAllVeterinaire();
        
        foreach ($agricoles as $agricole) {
            $agricole->compte = $this->utilisateurRepository->getById($agricole->compte);
            if ($agricole->compte) {
                $agricole->compte->avg_note = round(ExpertReview::where('expert', $agricole->compte->id)->avg('note') ?? 0, 1);
                $agricole->compte->nb_reviews = ExpertReview::where('expert', $agricole->compte->id)->count();
            }
        }

        foreach ($veterinaires as $veterinaire) {
            $veterinaire->compte = $this->utilisateurRepository->getById($veterinaire->compte);
            if ($veterinaire->compte) {
                $veterinaire->compte->avg_note = round(ExpertReview::where('expert', $veterinaire->compte->id)->avg('note') ?? 0, 1);
                $veterinaire->compte->nb_reviews = ExpertReview::where('expert', $veterinaire->compte->id)->count();
            }
        }

        // dd($agricoles);
        // dd($veterinaire);
        return view('consultations.index', compact('agricoles', 'veterinaires'));
    }

    public function expertShow(Request $request)
    {
        $validated = $request->validate([
            'expert_id' => 'required|integer|exists:utilisateurs,id',
        ]);
        $expert = $this->utilisateurRepository->getById($validated['expert_id']);
        if (!$expert) {
            abort(404, 'Expert introuvable.');
        }

        if($expert->type == 'agricole')
        {
            $agricole = $this->agricoleRepository->getByUtilisateurId($expert->id);
            $veterinaire = [];
        }

        if($expert->type == 'veterinaire')
        {
            $veterinaire = $this->veterinaireRepository->getByUtilisateurId($expert->id);
            $agricole = [];
        }

        // dd($agricole);
        $reviews = ExpertReview::with('clientUser')->where('expert', $expert->id)->latest()->get();
        $avgNote = round(ExpertReview::where('expert', $expert->id)->avg('note') ?? 0, 1);
        $nbReviews = $reviews->count();
        $myReview = auth()->check()
            ? ExpertReview::where('expert', $expert->id)->where('client', auth()->id())->first()
            : null;
        return view('experts.show', compact('expert', 'agricole', 'veterinaire', 'reviews', 'avgNote', 'nbReviews', 'myReview'));
    }

    public function expertReviewStore(Request $request)
    {
        $validated = $request->validate([
            'expert_id' => 'required|integer|exists:utilisateurs,id',
            'note' => 'required|integer|min:1|max:5',
            'commentaire' => 'nullable|string|max:1000',
        ]);

        if ($validated['expert_id'] === auth()->id()) {
            return back()->withErrors(['note' => 'Vous ne pouvez pas noter votre propre profil.']);
        }

        ExpertReview::updateOrCreate(
            ['expert' => $validated['expert_id'], 'client' => auth()->id()],
            ['note' => $validated['note'], 'commentaire' => $validated['commentaire'] ?? null]
        );

        return redirect()->route('experts.show', ['expert_id' => $validated['expert_id']])->with('success', 'Merci pour votre avis !');
    }

    public function createRendezVous(Request $request)
    {
        $validated = $request->validate([
            'expert_id' => 'required|integer|exists:utilisateurs,id',
        ]);
        $utilisateur = $this->utilisateurRepository->getById($validated['expert_id']);
        if (!$utilisateur) {
            abort(404, 'Expert introuvable.');
        }

        if($utilisateur->type == 'agricole')
        {
            $agricole = $this->agricoleRepository->getByUtilisateurId($utilisateur->id);
            $veterinaire = [];
        }else
        {
            $veterinaire = $this->veterinaireRepository->getByUtilisateurId($utilisateur->id);
            $agricole = [];
        }

        return view('rendezVous.create', compact('utilisateur', 'agricole', 'veterinaire'));
    }

    public function payementRendezVous(Request $request)
    {
        // dd($request);

        $validated = $request->validate([
            'expert_id' => 'required|integer',
            'client_id' => 'required|integer',
            'prix_deplacement' => 'required|numeric',
            'date' => 'required|string',
            'subject' => 'required|string',
            'description' => 'required|string',
            'adresse' => 'required|string',
            'telephone' => 'required|string',
            'terms' => 'required|accepted'
        ]);

        // dd($validated['prix_deplacement']);

        $total = $validated['prix_deplacement'];
        $expert = $this->utilisateurRepository->getById($validated['expert_id']);
      
        // dd($expert);
        $stripe =[
            "total" => $total,
            "nom" => $expert->nom,
            "prenom" => $expert->prenom
        ];
        
        session()->put('payerRendezVous', $stripe);

        $rendezVous = [
            'client' => $validated['client_id'],
            'expert' => $validated['expert_id'],
            'description' => $validated['description'],
            'date_reserver' => $validated['date'],
            'sujet' => $validated['subject'],
            'adresse' => $validated['adresse'],
            'telephone' => $validated['telephone'],
            'total' => $validated['prix_deplacement']
        ];

        $rendez = $this->rendezVousRepository->creerRendezVous($rendezVous);

        // dd($rendez->id);

        $rendezVous = $this->rendezVousRepository->getRendezVousById($rendez->id);
        $rendez_vous_id = $rendezVous->id;
        $rendez_vous_expert = $rendezVous->expert;
        $rendez_vous_client = $rendezVous->client;

        $rendezVous->expert = $this->utilisateurRepository->getById($rendezVous->expert);
        $rendezVous->client = $this->utilisateurRepository->getById($rendezVous->client);
        // // dd($rendezVous->sujet);

        $data = [
            'title' => 'Résumer Sur le Rendez-Vous ' . $rendezVous->sujet,
            'date' => date('d/m/Y'),
            'rendezVous' => $rendezVous
        ];

        // dd($data);

        $pdfSave = PDF::loadView('rendezVousPdf', $data);
        $pdfContent = $pdfSave->output();
        $this->documentRepository->uploader($pdfContent, $rendez_vous_id ,$rendez_vous_expert, $rendez_vous_client);

        return redirect()->route('rendezVous.checkout.stripe');
    }
}
