<?php

namespace App\Repositories\Interfaces;

interface VeterinaireRepositoryInterface
{
    public function create(array $data);
    public function getById(int $id);
    public function modifierProfilVeterinaire(int $id, array $data);
    public function repondreConsultation(int $consultation_id, string $reponse);
    public function consulterConsultation(int $id);
    public function refuserConsultation(int $consultation_id);
    public function getAllVeterinaire();
    public function getByUtilisateurId(int $id);
}