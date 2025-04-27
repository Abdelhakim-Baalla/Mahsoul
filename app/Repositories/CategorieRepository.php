<?php

namespace App\Repositories;

use App\Models\Categorie;
use App\Repositories\Interfaces\CategorieRepositoryInterface;

class CategorieRepository implements CategorieRepositoryInterface
{
    public function ajouterCategorie(string $nom, string $description){

    }
    
    public function getAllCategories(){

    }
    
    public function getCategorieById(int $id){
        return Categorie::find($id);
    }
    
    public function modifierCategorie(int $id, array $data){

    }
    
    public function supprimerCategorie(int $id){

    }
    
    public function getCategorieByCategorieId(int $id){

    }
    
}