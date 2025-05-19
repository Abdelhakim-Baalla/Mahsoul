<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\CommandeRepositoryInterface;
use App\Repositories\Interfaces\RendezVousRepositoryInterface;
use App\Repositories\Interfaces\UtilisateurRepositoryInterface;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    protected $commandeRepository;
    protected $rendezVousRepository;
    protected $utilisateurRepository;

    public function __construct(UtilisateurRepositoryInterface $utilisateurRepository, RendezVousRepositoryInterface $rendezVousRepository, CommandeRepositoryInterface $commandeRepository)
    {
        $this->commandeRepository = $commandeRepository;
        $this->rendezVousRepository = $rendezVousRepository;
        $this->utilisateurRepository = $utilisateurRepository;
    }

    public function clientDashboard()
    {
        // dd(auth()->user()->id);
        $countCommandes = $this->commandeRepository->countCommandesByUtilisateurId(auth()->user()->id);
        $countRendezVous = $this->rendezVousRepository->countConsultationsByUtilisateurId(auth()->user()->id);
        // dd($countCommandes);
        return view('client.dashboard', compact('countCommandes', 'countRendezVous'));
    }

    
    public function clientConsultationsIndex()
    {
        $rendezVous = $this->rendezVousRepository->getAllRendezVous();
        foreach ($rendezVous as $rendezVouse) {
            $rendezVouse->expert = $this->utilisateurRepository->getById($rendezVouse->expert);
        }
        // dd($rendezVous);
        return view('client.consultations', compact('rendezVous'));

    }

    public function clientConsultationsAnnuler(Request $request)
    {
        // dd($request->id);
        $data = [
            'statut' => 'review-canceling',
            'updated_at' => now()
        ];

        // $review-canceling;
        $this->rendezVousRepository->modifierRendezVous($request->id, $data);
        return redirect()->route('client.consultations.index');
    }
}
