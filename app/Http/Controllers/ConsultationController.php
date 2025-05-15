<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Repositories\Interfaces\AgricoleRepositoryInterface;
use App\Repositories\Interfaces\UtilisateurRepositoryInterface;
use App\Repositories\Interfaces\VeterinaireRepositoryInterface;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    protected $agricoleRepository;
    protected $veterinaireRepository;
    protected $utilisateurRepository;

    public function __construct(VeterinaireRepositoryInterface $veterinaireRepository, UtilisateurRepositoryInterface $utilisateurRepository, AgricoleRepositoryInterface $agricoleRepository)
    {
        $this->agricoleRepository = $agricoleRepository; 
        $this->veterinaireRepository = $veterinaireRepository; 
        $this->utilisateurRepository = $utilisateurRepository; 
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
}
