<?php

namespace App\Repositories\Interfaces;

interface CommentaireRepositoryInterface
{
    public function ajouterCommentaire(int $article_id, int $utilisateur_id, string $contenu);
    public function getCommentairesByArticleId(int $article_id);
    public function getCommentaireById(int $id);
    public function modifierCommentaire(int $id, array $data);
    public function supprimerCommentaire(int $id);
    public function getAllCommentaires();
}