<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\RendezVousRepositoryInterface;
use App\Repositories\Interfaces\UtilisateurRepositoryInterface;
use Illuminate\Http\Request;

class AgricoleController extends Controller
{

    protected $rendezVousRepository;
    protected $utilisateurRepository;

    public function __construct(UtilisateurRepositoryInterface $utilisateurRepository, RendezVousRepositoryInterface $rendezVousRepository)
    {
        $this->rendezVousRepository = $rendezVousRepository; 
        $this->utilisateurRepository = $utilisateurRepository; 
    }


    public function agricoleDashboard()
    {
        // dd(auth()->user()->id);
        $countRendezVous = $this->rendezVousRepository->countConsultationsByExpertId(auth()->user()->id);
        $rendezVous = $this->rendezVousRepository->countRevenusByExpertId(auth()->user()->id);
        $revenu = 0;
        foreach ($rendezVous as $rendez) {
            $revenu = $revenu + ($rendez->total - 25);
            $rendez->client = $this->utilisateurRepository->getById($rendez->client);
            // dd($rendez->client);
        }

        return view('agricole.dashboard', compact('countRendezVous', 'revenu', 'rendezVous'));
    }
}
