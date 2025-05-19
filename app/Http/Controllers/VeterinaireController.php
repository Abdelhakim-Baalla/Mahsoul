<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\RendezVousRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VeterinaireController extends Controller
{
    protected $rendezVousRepository;

    public function __construct(RendezVousRepositoryInterface $rendezVousRepository)
    {
        $this->rendezVousRepository = $rendezVousRepository;    
    }

    public function veterinaireDashboard()
    {
        // dd(Auth::user()->id);
        $countRendezVous = $this->rendezVousRepository->countConsultationsByExpertId(Auth::user()->id);
        $countRevenus = $this->rendezVousRepository->countRevenusByExpertId(Auth::user()->id);
        $total = 0;

        if($countRevenus->isEmpty()){
            $total = 0;
        }else{
            foreach ($countRevenus as $revenu) {
                $total = $total + ($revenu->total - 25);
                // echo $revenu->total;
            }
        }

        // dd($total);
        return view('vet.dashboard', compact('countRendezVous', 'total'));
    }
}
