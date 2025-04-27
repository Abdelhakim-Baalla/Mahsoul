<?php

namespace App\Repositories\Interfaces;

interface ArticleRepositoryInterface
{
    public function creeArticle(array $data);
    public function getAllArticles();
    public function getArticleById(int $id);
    public function modifierArticle(int $id, array $data);
    public function supprimerArticle(int $id);
    public function getAdminById(int $id);
    public function getUtilisateurAdminById(int $id);
    public function getCategorieById(int $id);
    public function getPublishedArticles();
}
