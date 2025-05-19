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
        // dd($id);
        return RendezVous::find($id);
    }

    public function getAllRendezVous(){
        return RendezVous::paginate(5);
    }
    
    public function modifierRendezVous(int $id, array $data){
        // dd($id);
        $rendez_vous = $this->getRendezVousById($id);
        // dd($rendez_vous);
        return $rendez_vous->update($data);
    }
    
    public function confirmerRendezVous(int $rendez_vous_id){

    }
    
    public function countConsultations(){
        return RendezVous::get()->count();
    }

    public function countConsultationsByUtilisateurId(int $id)
    {
        return RendezVous::get()->where('client', $id) ->count();
    }

     public function countConsultationsByExpertId(int $id)
     {
        return RendezVous::get()->where('expert', $id) ->count();
    }

    public function countRevenusByExpertId(int $id)
    {
        return RendezVous::get()->where('expert', $id);
    }

    public function getRendezVousFiltrer(string $statut)
    {
         return RendezVous::where('statut', $statut)->paginate(5);
    }

    public function getRendezVousByStatusAndExpertId(string $statut, int $id)
    {
         return RendezVous::where('statut', $statut)->where('expert', $id)->paginate(3);
    }

    public function countRendezVousByStatusAndExpertId(string $statut, int $id)
    {
        
        return RendezVous::where('statut', $statut)->where('expert', $id)->count();
    }
    
}