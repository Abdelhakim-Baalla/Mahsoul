<?php

namespace App\Repositories\Interfaces;

interface AgricoleRepositoryInterface
{
    public function create(array $data);
    public function getById(int $id);
    public function modifierProfilAgricole(int $id, array $data);
    public function repondreConsultation(int $consultation_id, string $reponse);
    public function consulterConsultation(int $id);
    public function refuserConsultation(int $consultation_id);
}