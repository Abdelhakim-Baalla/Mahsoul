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
        return RendezVous::find($id);
    }

    public function getAllRendezVous(){
        return RendezVous::paginate(5);
    }
    
    public function modifierRendezVous(int $id, array $data){
        $rendez_vous = $this->getRendezVousById($id);
        return $rendez_vous->update($data);
    }
    
    public function confirmerRendezVous(int $rendez_vous_id){

    }
    
    public function countConsultations(){
        return RendezVous::get()->count();
    }

    public function countConsultationsByUtilisateurId(int $id){
        return RendezVous::get()->where('client', $id) ->count();
    }
    
}