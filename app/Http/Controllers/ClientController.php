<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\CommandeRepositoryInterface;
use App\Repositories\Interfaces\DocumentRepositoryInterface;
use App\Repositories\Interfaces\RendezVousRepositoryInterface;
use App\Repositories\Interfaces\UtilisateurRepositoryInterface;
use Illuminate\Http\Request;

use PDF;

class ClientController extends Controller
{
    protected $commandeRepository;
    protected $rendezVousRepository;
    protected $utilisateurRepository;
    protected $documentRepository;

    public function __construct(DocumentRepositoryInterface $documentRepository, UtilisateurRepositoryInterface $utilisateurRepository, RendezVousRepositoryInterface $rendezVousRepository, CommandeRepositoryInterface $commandeRepository)
    {
        $this->commandeRepository = $commandeRepository;
        $this->rendezVousRepository = $rendezVousRepository;
        $this->utilisateurRepository = $utilisateurRepository;
        $this->documentRepository = $documentRepository;
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

    public function clientConsultationsDownloadPDF(Request $request)
    {
        // dd($request->id);
        $rendezVous = $this->rendezVousRepository->getRendezVousById($request->id);
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

        $pdf = PDF::loadView('rendezVousPdf', $data);
        return $pdf->download('rendezVous.pdf');
        // $title = 'Résumer Sur le Rendez-Vous ' . $rendezVous->sujet;
        // $date = date('d/m/Y');

        // return view('rendezVousPdf', compact('rendezVous', 'title', 'date'));
    }
}
