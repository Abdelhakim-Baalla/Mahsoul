<?php

namespace App\Repositories;

use App\Models\Commande;
use App\Repositories\Interfaces\CommandeRepositoryInterface;

class CommandeRepository implements CommandeRepositoryInterface
{
    public function creerCommande(array $data){
        return Commande::create($data);
    }
    
    public function getCommandeById(int $id){

    }
    
    public function modifierCommande(int $id, array $data){

    }
    
    public function supprimerCommande(int $id){

    }
    
    public function getCommandesByClientId(int $client_id){
        return Commande::get()->where('client', $client_id);

    }
    
    public function getAllCommandes(){
        return Commande::get();
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

    public function countCommandesByUtilisateurId(int $id){
        return Commande::get()->where('client', $id) ->count();
    }
    
}