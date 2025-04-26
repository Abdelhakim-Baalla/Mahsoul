<?php

namespace App\Repositories;

use App\Models\Veterinaire;
use App\Repositories\Interfaces\VeterinaireRepositoryInterface;

class VeterinaireRepository implements VeterinaireRepositoryInterface
{
    public function create(array $data)
    {
        return Veterinaire::create($data);
    }


    public function getById(int $id)
    {
        return Veterinaire::find($id);
    }

    public function modifierProfilVeterinaire(int $id, array $data)
    {
        $veterinaire = $this->getById($id);

        return $veterinaire->update($data);
    }

    public function repondreConsultation(int $consultation_id, string $reponse){

    }
    
    public function consulterConsultation(int $id){

    }
    
    public function refuserConsultation(int $consultation_id){

    }
    
}