<?php

namespace App\Repositories\Interfaces;

interface AdminRepositoryInterface
{
    public function create(array $data);
    public function getById(int $id);
    public function modifierProfilAdmin(int $id, array $data);
    public function creerArticle(string $titre, string $photo, string $contenu);
    public function getAllArticles();
    public function getArticleById(int $id);
    public function modifierArticle(int $id, array $data);
    public function supprimerArticle(int $id);
    public function getAllClients();
    public function getAllVeterinaires();
    public function getAllAgricoles();
    public function ajouterProduit(string $nom, string $description, float $prix, int $quantite, string $unite_mesure, string $categorie_id, string $image);
    public function getAllProduits();
    public function getProduitById(int $id);
    public function modifierProduit(int $id, array $data);
    public function supprimerProduit(int $id);
}