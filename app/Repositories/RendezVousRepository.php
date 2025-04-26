<?php

namespace App\Repositories;

use App\Models\RendezVous;
use App\Repositories\Interfaces\RendezVousRepositoryInterface;

class RendezVousRepository implements RendezVousRepositoryInterface
{
    public function creerRendezVous(int $client_id, int $expert_id, $date, string $description){

    }
    
    public function annulerRendezVous(int $rendez_vous_id){

    }
    
    public function getRendezVousById(int $id){

    }
    
    public function modifierRendezVous(int $rendez_vous_id, $date, $description){

    }
    
    public function confirmerRendezVous(int $rendez_vous_id){

    }
    
    
}