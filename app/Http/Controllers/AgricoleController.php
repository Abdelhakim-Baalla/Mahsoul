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

    public function agricoleAppointmentsIndex ()
    {
        $rendezVous = $this->rendezVousRepository->getAllRendezVous();
        foreach ($rendezVous as $rendez) {
            $rendez->client = $this->utilisateurRepository->getById($rendez->client);
            // dd($rendez->client);
        }
        return view('agricole.appointments.index', compact('rendezVous'));
    }

    public function agricoleAppointmentsShow (Request $request)
    {
        // dd($request->all());
        $rendezVous = $this->rendezVousRepository->getRendezVousById($request->id);
        $rendezVous->client = $this->utilisateurRepository->getById($rendezVous->client);
        // dd($rendezVous->client);

        return view('agricole.appointments.show', compact('rendezVous'));
    }

    public function agricoleAppointmentsAccept(Request $request)
    {
        // dd($request->id);
        $data = [
            'statut' => 'approved'
        ];

        $this->rendezVousRepository->modifierRendezVous($request->id, $data);
        
        return redirect()->route('agricole.appointments.index');
    }

     public function agricoleAppointmentsRefuse(Request $request)
    {
        // dd($request->id);
        $data = [
            'statut' => 'cancel'
        ];

        $this->rendezVousRepository->modifierRendezVous($request->id, $data);
        
        return redirect()->route('agricole.appointments.index');
    }

     public function agricoleAppointmentsAccepteAnnulation(Request $request)
    {
        // dd($request->id);
        $data = [
            'statut' => 'approved-canceling'
        ];

        $this->rendezVousRepository->modifierRendezVous($request->id, $data);
        
        return redirect()->route('agricole.appointments.index');
    }
}
