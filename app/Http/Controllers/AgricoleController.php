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
        $this->middleware('auth');
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

    public function agricoleAppointmentsIndexFiltrer(Request $request)
    {
        // dd($request->status);

        $rendezVous = $this->rendezVousRepository->getRendezVousFiltrer($request->status);
        foreach ($rendezVous as $rendez) {
            $rendez->client = $this->utilisateurRepository->getById($rendez->client);
            // dd($rendez->client);
        }
        return view('agricole.appointments.index', compact('rendezVous'));
    }

    public function agricoleAppointmentsShow (Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer|exists:rendez_vous,id',
        ]);
        $rendezVous = $this->rendezVousRepository->getRendezVousById($validated['id']);
        if (!$rendezVous) {
            abort(404, 'Rendez-vous introuvable.');
        }
        $rendezVous->client = $this->utilisateurRepository->getById($rendezVous->client);
        // dd($rendezVous->client);

        return view('agricole.appointments.show', compact('rendezVous'));
    }

    public function agricoleAppointmentsAccept(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer|exists:rendez_vous,id',
        ]);
        $data = [
            'statut' => 'approved'
        ];

        $this->rendezVousRepository->modifierRendezVous($validated['id'], $data);
        
        return redirect()->route('agricole.appointments.index');
    }

     public function agricoleAppointmentsRefuse(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer|exists:rendez_vous,id',
        ]);
        $data = [
            'statut' => 'cancel'
        ];

        $this->rendezVousRepository->modifierRendezVous($validated['id'], $data);
        
        return redirect()->route('agricole.appointments.index');
    }

     public function agricoleAppointmentsAccepteAnnulation(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer|exists:rendez_vous,id',
        ]);
        $data = [
            'statut' => 'approved-canceling'
        ];

        $this->rendezVousRepository->modifierRendezVous($validated['id'], $data);
        
        return redirect()->route('agricole.appointments.index');
    }

    public function agricoleAppointmentsRefuserAnnulation(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer|exists:rendez_vous,id',
        ]);
        $data = [
            'statut' => 'cancel-canceling'
        ];

        $this->rendezVousRepository->modifierRendezVous($validated['id'], $data);
        
        return redirect()->route('agricole.appointments.index');
    }
}
