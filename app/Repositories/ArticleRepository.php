<?php

namespace App\Repositories;

use App\Models\Article;
use App\Repositories\Interfaces\ArticleRepositoryInterface;

class ArticleRepository implements ArticleRepositoryInterface
{
    public function creeArticle(string $titre, string $contenu, string $photo){

    }
    
    public function getAllArticles(){

    }
    
    public function getArticleById(int $id){

    }
    
    public function modifierArticle(int $id, array $data){

    }
    
    public function supprimerArticle(int $id){

    }
    
    
}