<?php

namespace App\Repositories;

use App\Models\Produit;
use App\Repositories\Interfaces\ProduitRepositoryInterface;

class ProduitRepository implements ProduitRepositoryInterface
{
    public function ajouterproduit(array $data) {
        return Produit::create($data);

    }
    
    public function retirerDuStock(int $produit_id, float $quantite){

    }

    public function modifierProduit(int $id, array $data){
        $produit = $this->getProduitById($id);
        // dd($produit);
       return $produit->update([
            'nom' => $data['nom'],
            'categorie' => $data['categorie'],
            'description' => $data['description'],
            'prix' => $data['prix'],
            'quantite' => $data['quantite'],
            'unite_mesure' => $data['unite_mesure'],
            'en_stock' => $data['en_stock'],
            'image' => $data['image'],
            'vendeur' => $data['vendeur'],
        ]);
    }
    
    public function getProduitById(int $id){
        return Produit::find($id);
    }
    
    public function getAllProduits(){
        return Produit::paginate(5);
    }

    public function getAllProduitsClient(){
        return Produit::paginate(8);
    }
    
    public function getProduitsEnStock(){

    }
    
    public function getProduitsEpuises(){

    }

    public function deleteProduits(int $id){
        $produit = $this->getProduitById($id);
        $produit->delete();
    }
    public function countProduit(){
        return Produit::get()->count();
    }
    
}