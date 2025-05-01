<?php

namespace App\Repositories;

use App\Models\Categorie;
use App\Repositories\Interfaces\CategorieRepositoryInterface;

class CategorieRepository implements CategorieRepositoryInterface
{
    public function ajouterCategorie(string $nom, string $description) {}

    public function getAllCategories()
    {
        return Categorie::get(); 
    }

    public function getCategorieById(int $id)
    {
        return Categorie::find($id);
    }

    public function modifierCategorie(int $id, array $data) {
        $categorie = $this->getCategorieById($id);
        return $categorie->update(
            [
                'nom' => $data['nom'],
                'description' => $data['description']
            ]
        );
    }

    public function supprimerCategorie(int $id) {
        $categorie = $this->getCategorieById($id);
        return $categorie->delete();
    }

    public function getCategorieByCategorieId(int $id) {}
}
