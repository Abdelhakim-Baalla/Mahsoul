<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\CommandeRepositoryInterface;
use App\Repositories\Interfaces\RendezVousRepositoryInterface;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    protected $commandeRepository;
    protected $rendezVousRepository;

    public function __construct(RendezVousRepositoryInterface $rendezVousRepository, CommandeRepositoryInterface $commandeRepository)
    {
        $this->commandeRepository = $commandeRepository;
        $this->rendezVousRepository = $rendezVousRepository;
    }

    public function clientDashboard()
    {
        // dd(auth()->user()->id);
        $countCommandes = $this->commandeRepository->countCommandesByUtilisateurId(auth()->user()->id);
        $countRendezVous = $this->rendezVousRepository->countConsultationsByUtilisateurId(auth()->user()->id);
        // dd($countCommandes);
        return view('client.dashboard', compact('countCommandes', 'countRendezVous'));
    }

}
