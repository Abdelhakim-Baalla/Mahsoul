<?php

namespace App\Repositories;

use App\Models\Client;
use App\Repositories\Interfaces\ClientRepositoryInterface;

class ClientRepository implements ClientRepositoryInterface
{
    public function create(array $data)
    {
        return Client::create($data);
    }


    public function getById(int $id)
    {
        return Client::find($id);
    }

    public function modifierProfilClient(int $id, array $data)
    {
        $client = $this->getById($id);

        return $client->update($data);
    }

    public function prendreRendezVous(int $expert_id, $date, string $description){

    }

    public function annulerRendezVous(int $rendez_vous_id){

    }

    public function ajouterPanier(int $produitId, int $quantite){

    }
    
    public function modifierQuantitePanier(int $produit_id, int $quantite){

    }

    public function consultationHistorique(){

    }

    public function passerCommande(string $adresse_livraison, string $methode_paiement){

    }

}