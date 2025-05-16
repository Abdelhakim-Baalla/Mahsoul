<?php

namespace App\Repositories\Interfaces;

interface RendezVousRepositoryInterface
{
    public function creerRendezVous(array $data);
    public function annulerRendezVous(int $rendez_vous_id);
    public function getRendezVousById(int $id);
    public function modifierRendezVous(int $rendez_vous_id, $date, $description);
    public function confirmerRendezVous(int $rendez_vous_id);
    public function countConsultations();
}