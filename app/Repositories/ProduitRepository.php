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
    
    public function getProduitById(int $id){

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

    public function countProduit(){
        return Produit::get()->count();
    }
    
}