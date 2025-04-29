<?php

namespace App\Repositories;

use App\Models\Commande;
use App\Repositories\Interfaces\CommandeRepositoryInterface;

class CommandeRepository implements CommandeRepositoryInterface
{
    public function creerCommande(int $client_id, array $produits, string $adresse_livraison, $date,string $mothod, string $reference){

    }
    
    public function getCommandeById(int $id){

    }
    
    public function modifierCommande(int $id, array $data){

    }
    
    public function supprimerCommande(int $id){

    }
    
    public function getCommandesByClientId(int $client_id){

    }
    
    public function getAllCommandes(){

    }
    
    public function calculerTotal(array $produits){

    }
    
    public function verifierDisponibilite(array $produits){

    }
    
    public function confirmerCommande(int $id_commande){

    }
    
    public function annulerCommande(int $id_commande){

    }
    
    public function genererFacteure(int $id_commande){

    }

    public function countCommandes(){
        return Commande::get()->count();
    }
    
}