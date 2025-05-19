<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Repositories\Interfaces\AgricoleRepositoryInterface;
use App\Repositories\Interfaces\RendezVousRepositoryInterface;
use App\Repositories\Interfaces\UtilisateurRepositoryInterface;
use App\Repositories\Interfaces\VeterinaireRepositoryInterface;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    protected $agricoleRepository;
    protected $veterinaireRepository;
    protected $utilisateurRepository;
    protected $rendezVousRepository;

    public function __construct(RendezVousRepositoryInterface $rendezVousRepository, VeterinaireRepositoryInterface $veterinaireRepository, UtilisateurRepositoryInterface $utilisateurRepository, AgricoleRepositoryInterface $agricoleRepository)
    {
        $this->agricoleRepository = $agricoleRepository; 
        $this->veterinaireRepository = $veterinaireRepository; 
        $this->utilisateurRepository = $utilisateurRepository; 
        $this->rendezVousRepository = $rendezVousRepository; 
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
        }

        foreach ($veterinaires as $veterinaire) {
            $veterinaire->compte = $this->utilisateurRepository->getById($veterinaire->compte);
        }

        // dd($agricoles);
        // dd($veterinaire);
        return view('consultations.index', compact('agricoles', 'veterinaires'));
    }

    public function expertShow(Request $request)
    {
        $expert = $this->utilisateurRepository->getById($request->expert_id);
        // dd($expert->id);

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
        return view('experts.show', compact('expert', 'agricole', 'veterinaire'));
    }

    public function createRendezVous(Request $request)
    {
        // dd($request->expert_id);
        $utilisateur = $this->utilisateurRepository->getById($request->expert_id);
        // dd($utilisateur->type);

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

        $this->rendezVousRepository->creerRendezVous($rendezVous);

        return redirect()->route('rendezVous.checkout.stripe');
    }
}
