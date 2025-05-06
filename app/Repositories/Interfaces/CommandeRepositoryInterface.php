<?php

namespace App\Repositories\Interfaces;

interface CommandeRepositoryInterface
{
    public function creerCommande(array $data);
    public function getCommandeById(int $id);
    public function modifierCommande(int $id, array $data);
    public function supprimerCommande(int $id);
    public function getCommandesByClientId(int $client_id);
    public function getAllCommandes();
    public function calculerTotal(array $produits);
    public function verifierDisponibilite(array $produits);
    public function confirmerCommande(int $id_commande);
    public function annulerCommande(int $id_commande);
    public function genererFacteure(int $id_commande);
    public function countCommandes();
    
}