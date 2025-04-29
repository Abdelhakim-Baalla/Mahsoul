<?php

namespace App\Repositories;

use App\Models\Produit;
use App\Repositories\Interfaces\ProduitRepositoryInterface;

class ProduitRepository implements ProduitRepositoryInterface
{
    public function ajouterEnStock(int $produit_id, float $quantite){

    }
    
    public function retirerDuStock(int $produit_id, float $quantite){

    }
    
    public function getProduitById(int $id){

    }
    
    public function getAllProduits(){

    }
    
    public function getProduitsEnStock(){

    }
    
    public function getProduitsEpuises(){

    }

    public function countProduit(){
        return Produit::get()->count();
    }
    
}