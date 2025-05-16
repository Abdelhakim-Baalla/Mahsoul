<?php

namespace App\Repositories\Interfaces;

interface RendezVousRepositoryInterface
{
    public function creerRendezVous(array $data);
    public function annulerRendezVous(int $rendez_vous_id);
    public function getRendezVousById(int $id);
    public function modifierRendezVous(int $id, array $data);
    public function confirmerRendezVous(int $rendez_vous_id);
    public function countConsultations();
    public function countConsultationsByUtilisateurId(int $id);
    public function getAllRendezVous();
}