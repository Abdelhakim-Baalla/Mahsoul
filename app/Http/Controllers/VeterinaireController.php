<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\ClientRepositoryInterface;
use App\Repositories\Interfaces\RendezVousRepositoryInterface;
use App\Repositories\Interfaces\UtilisateurRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VeterinaireController extends Controller
{
    protected $rendezVousRepository;
    protected $clientRepository;
    protected $utilisateurRepository;

    public function __construct(UtilisateurRepositoryInterface $utilisateurRepository, ClientRepositoryInterface $clientRepository, RendezVousRepositoryInterface $rendezVousRepository)
    {
        $this->rendezVousRepository = $rendezVousRepository;
        $this->clientRepository = $clientRepository;
        $this->utilisateurRepository = $utilisateurRepository;
    }

    public function veterinaireDashboard()
    {
        // dd(Auth::user()->id);
        $countRendezVous = $this->rendezVousRepository->countConsultationsByExpertId(Auth::user()->id);
        $countRevenus = $this->rendezVousRepository->countRevenusByExpertId(Auth::user()->id);
        $total = 0;
        $consultationsEnAttente = $this->rendezVousRepository->getRendezVousByStatusAndExpertId('pending', Auth::user()->id);
        $countConsultationsEnAttente = $this->rendezVousRepository->countRendezVousByStatusAndExpertId('pending', Auth::user()->id);

        $consultationsRecent = $this->rendezVousRepository->getRendezVousByStatusAndExpertId('approved', Auth::user()->id);
        $countConsultationsRecent = $this->rendezVousRepository->countRendezVousByStatusAndExpertId('approved', Auth::user()->id);
        $countConsultationsRecent2 = $this->rendezVousRepository->countRendezVousByStatusAndExpertId('cancel-canceling', Auth::user()->id);
        $countConsultationsRecent += $countConsultationsRecent2;


        $consultationsAnnules = $this->rendezVousRepository->getRendezVousByStatusAndExpertId('cancel', Auth::user()->id);
        // dd($consultationsAnnules);
        $countConsultationsAnnules = $this->rendezVousRepository->countRendezVousByStatusAndExpertId('cancel', Auth::user()->id);
        $countConsultationsAnnules2 = $this->rendezVousRepository->countRendezVousByStatusAndExpertId('approved-canceling', Auth::user()->id);
        $countConsultationsAnnules += $countConsultationsAnnules2;

        if ($countRevenus->isEmpty()) {
            $total = 0;
        } else {
            foreach ($countRevenus as $revenu) {
                $total = $total + ($revenu->total - 25);
                // echo $revenu->total;
            }
        }

        foreach ($consultationsEnAttente as $consultation) {
            $consultation->client = $this->utilisateurRepository->getById($consultation->client);
        }

        foreach ($consultationsRecent as $consultation) {
            $consultation->client = $this->utilisateurRepository->getById($consultation->client);
        }

        foreach ($consultationsAnnules as $consultation) {
            $consultation->client = $this->utilisateurRepository->getById($consultation->client);
        }

        // dd($consultationsEnAttente);
        return view('vet.dashboard', compact('countRendezVous', 'total', 'consultationsEnAttente', 'consultationsRecent', 'countConsultationsEnAttente', 'countConsultationsRecent', 'consultationsAnnules', 'countConsultationsAnnules'));
    }

    public function vetConsultationsIndex()
    {
        $rendezVous = $this->rendezVousRepository->getAllRendezVous();
        foreach ($rendezVous as $consultation) {
            $consultation->client = $this->utilisateurRepository->getById($consultation->client);
        }

        return view('vet.consultations.index', compact('rendezVous'));
    }

    public function vetConsultationsShow(Request $request)
    {
        // dd($request->id);
        $consultation = $this->rendezVousRepository->getRendezVousById($request->id);
        $consultation->client = $this->utilisateurRepository->getById($consultation->client);

        // dd($rendezVous);
        return view('vet.consultations.show', compact('consultation'));
    }



    public function vetAppointmentsAccept(Request $request)
    {
        // dd($request->id);
        $data = [
            'statut' => 'approved'
        ];

        $this->rendezVousRepository->modifierRendezVous($request->id, $data);

        return redirect()->route('vet.consultations.show', 'id=' . $request->id);
    }

    public function vetAppointmentsRefuse(Request $request)
    {
        // dd($request->id);
        $data = [
            'statut' => 'cancel'
        ];

        $this->rendezVousRepository->modifierRendezVous($request->id, $data);

        return redirect()->route('vet.consultations.show', 'id=' . $request->id);
    }

    public function vetAppointmentsAccepteAnnulation(Request $request)
    {
        // dd($request->id);
        $data = [
            'statut' => 'approved-canceling'
        ];

        $this->rendezVousRepository->modifierRendezVous($request->id, $data);

        return redirect()->route('vet.consultations.show', 'id=' . $request->id);
    }

    public function vetAppointmentsRefuserAnnulation(Request $request)
    {
        // dd($request->id);
        $data = [
            'statut' => 'cancel-canceling'
        ];

        $this->rendezVousRepository->modifierRendezVous($request->id, $data);

        return redirect()->route('vet.consultations.show', 'id=' . $request->id);
    }

    public function veterinaireAppointmentsIndexFiltrer(Request $request)
    {
        $rendezVous = $this->rendezVousRepository->getRendezVousFiltrer($request->status);
        foreach ($rendezVous as $rendez) {
            $rendez->client = $this->utilisateurRepository->getById($rendez->client);
            // dd($rendez->client);
        }
        return view('vet.consultations.index', compact('rendezVous'));
    }
}
