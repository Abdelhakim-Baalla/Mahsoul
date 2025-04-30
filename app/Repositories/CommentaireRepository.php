<?php

namespace App\Repositories;

use App\Models\Commentaire;
use App\Repositories\Interfaces\CommentaireRepositoryInterface;

class CommentaireRepository implements CommentaireRepositoryInterface
{
   
    public function ajouterCommentaire(int $article_id, int $utilisateur_id, string $contenu){
        return Commentaire::create([
            'article' => $article_id,
            'utilisateur' => $utilisateur_id,
            'contenu' => $contenu
        ]);
    }
    
    public function getCommentairesByArticleId(int $article_id){
        return Commentaire::where('article', $article_id)->get();
    }
    
    public function getCommentaireById(int $id){
        return Commentaire::find($id);
    }
    
    public function modifierCommentaire(int $id, array $data){

    }
    
    public function supprimerCommentaire(int $id){
        $commentaire = $this->getCommentaireById($id);
        return $commentaire->delete();
    }
    
    public function getAllCommentaires(){
        return Commentaire::paginate(); 
    }
    
    
}