<?php

namespace App\Repositories;

use App\Models\Article;
use App\Repositories\Interfaces\AdminRepositoryInterface;
use App\Repositories\Interfaces\ArticleRepositoryInterface;
use App\Repositories\Interfaces\CategorieRepositoryInterface;

class ArticleRepository implements ArticleRepositoryInterface
{
    protected $adminRepository;
    protected $categorieRepository;
    public function __construct(AdminRepositoryInterface $adminRepository, CategorieRepositoryInterface $categorieRepository)
    {
        $this->adminRepository = $adminRepository;
        $this->categorieRepository = $categorieRepository;
    }

    public function creeArticle(array $data)
    {
        // dd($data);
        return Article::create([
            'titre' => $data['titre'],
            'photo' => $data['photo'],
            'contenu' => $data['contenu'],
            'statut' => $data['statut'],
            'categorie' => $data['categorie']
        ]);
    }

    public function getAllArticles()
    {
        return Article::paginate(6);
    }

    public function getPublishedArticles()
    {
        return Article::where('statut', 'publié')->paginate(6);
    }

    public function getAdminById(int $id)
    {
        return $this->adminRepository->getById($id);
    }

    public function getUtilisateurAdminById(int $id)
    {
        return $this->adminRepository->getUtilisateurById($id);
    }

    public function getCategorieById(int $id)
    {
        return $this->categorieRepository->getCategorieById($id);
    }

    public function getArticleById(int $id)
    {
        return Article::find($id);
    }

    public function modifierArticle(int $id, array $data) {}

    public function supprimerArticle(int $id) {}
}
