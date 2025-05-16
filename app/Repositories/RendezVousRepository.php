<?php

namespace App\Repositories;

use App\Models\RendezVous;
use App\Repositories\Interfaces\RendezVousRepositoryInterface;

class RendezVousRepository implements RendezVousRepositoryInterface
{
    public function creerRendezVous(array $data){
        return RendezVous::create($data);
    }
    
    public function annulerRendezVous(int $rendez_vous_id){

    }
    
    public function getRendezVousById(int $id){

    }
    
    public function modifierRendezVous(int $rendez_vous_id, $date, $description){

    }
    
    public function confirmerRendezVous(int $rendez_vous_id){

    }
    
    public function countConsultations(){
        return RendezVous::get()->count();
    }
    
}