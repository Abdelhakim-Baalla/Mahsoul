<?php

namespace App\Repositories\Interfaces;

interface CategorieRepositoryInterface
{
    public function ajouterCategorie(string $nom, string $description);
    public function getAllCategories();
    public function getCategorieById(int $id);
    public function modifierCategorie(int $id, array $data);
    public function supprimerCategorie(int $id);
    public function getCategorieByCategorieId(int $id);
}