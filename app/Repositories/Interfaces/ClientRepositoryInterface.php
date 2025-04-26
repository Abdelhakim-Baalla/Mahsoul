<?php

namespace App\Repositories\Interfaces;

interface ClientRepositoryInterface
{
    public function create(array $data);
    public function getById(int $id);
    public function ajouterPanier(int $produitId, int $quantite);
    public function modifierQuantitePanier(int $produit_id, int $quantite);
    public function prendreRendezVous(int $expert_id, $date, string $description);
    public function annulerRendezVous(int $rendez_vous_id);
    public function modifierProfilClient(int $id, array $data);
    public function consultationHistorique();
    public function passerCommande(string $adresse_livraison, string $methode_paiement);
}