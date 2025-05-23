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
    public function countConsultationsByExpertId(int $id);
    public function countRevenusByExpertId(int $id);
    public function getRendezVousFiltrer(string $statut);
    public function getRendezVousByStatusAndExpertId(string $statut, int $id);
    public function countRendezVousByStatusAndExpertId(string $statut, int $id);
}