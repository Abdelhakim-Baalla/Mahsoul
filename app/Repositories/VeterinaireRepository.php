<?php

namespace App\Repositories;

use App\Models\Veterinaire;
use App\Repositories\Interfaces\VeterinaireRepositoryInterface;

class VeterinaireRepository implements VeterinaireRepositoryInterface
{
    public function create(array $data)
    {
        // dd($data);
        return Veterinaire::create([
            'specialite' => $data['specialite'],
            'diplome' => $data['diplome'],
            'annee_experience' => $data['annee_experience'],
            'prix_deplacement' => $data['prix_deplacement'],
            'compte' => $data['compte']
        ]);
    }


    public function getById(int $id)
    {
        return Veterinaire::find($id);
    }

    public function getAllVeterinaire()
    {
        return Veterinaire::get();
    }

    public function getByUtilisateurId(int $id)
    {
        return Veterinaire::get()->where('compte', $id)->first();
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