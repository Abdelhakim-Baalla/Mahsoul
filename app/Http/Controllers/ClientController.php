<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\CommandeRepositoryInterface;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    protected $commandeRepository;

    public function __construct(CommandeRepositoryInterface $commandeRepository)
    {
        $this->commandeRepository = $commandeRepository;
    }

    public function clientDashboard()
    {
        // dd(auth()->user()->id);
        $countCommandes = $this->commandeRepository->countCommandesByUtilisateurId(auth()->user()->id);
        // dd($countCommandes);
        return view('client.dashboard', compact('countCommandes'));
    }
}
