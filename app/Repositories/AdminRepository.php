<?php

namespace App\Repositories;

use App\Models\Admin;
use App\Repositories\Interfaces\AdminRepositoryInterface;
use App\Repositories\Interfaces\UtilisateurRepositoryInterface;

class AdminRepository implements AdminRepositoryInterface
{

    protected $utilisateurRepository;
    public function __construct(UtilisateurRepositoryInterface $utilisateurRepository)
    {
        $this->utilisateurRepository = $utilisateurRepository;
    }

    public function create(array $data)
    {
        return Admin::create($data);
    }


    public function getById(int $id)
    {
        return Admin::find($id);
    }

    public function getUtilisateurById(int $id)
    {
        $admin = $this->getById($id);
        return $this->utilisateurRepository->getById($admin->compte);
    }


    public function modifierProfilAdmin(int $id, array $data)
    {
        $admin = $this->getById($id);

        return $admin->update($data);
    }

    public function creerArticle(string $titre, string $photo, string $contenu){

    }
    public function getAllArticles(){
        
    }
    public function getArticleById(int $id){
        
    }
    public function modifierArticle(int $id, array $data){
        
    }
    public function supprimerArticle(int $id){
        
    }
    public function getAllClients(){
        
    }
    public function getAllVeterinaires(){
        
    }
    public function getAllAgricoles(){
        
    }
    public function ajouterProduit(string $nom, string $description, float $prix, int $quantite, string $unite_mesure, string $categorie_id, string $image){
        
    }
    public function getAllProduits(){
        
    }
    public function getProduitById(int $id){
        
    }
    public function modifierProduit(int $id, array $data){
        
    }
    public function supprimerProduit(int $id){
        
    }
}