<?php

namespace App\Repositories;

use App\Models\Article;
use App\Models\Utilisateur;
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
            'categorie' => $data['categorie'],
            'categorie_id' => $data['categorie_id'],
            'auteur' => $data['auteur_id']
        ]);
    }

    public function getAllArticles()
    {
        return Article::paginate(5);
    }

    public function getPublishedArticles()
    {
        return Article::where('statut', 'like', 'publié')->paginate(9);
    }

    public function getAdminById(int $id)
    {
        return $this->adminRepository->getById($id);
    }

    public function getAdminByUtilisateurId(int $id)
    {
        return $this->adminRepository->getByUtilisateurId($id);
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

    public function modifierArticle(int $id, array $data) {
        $article = $this->getArticleById($id);
        // dd($article);
        return $article->update([
            'titre' => $data['titre'],
            'photo' => $data['photo'],
            'contenu' => $data['contenu'],
            'statut' => $data['statut'],
            'categorie' => $data['categorie'],
            'categorie_id' => $data['categorie_id'],
            'auteur' => $data['auteur']
        ]);
    }

    public function supprimerArticle(int $id) {
        $article = $this->getArticleById($id);
        return $article->delete();
    }
}
