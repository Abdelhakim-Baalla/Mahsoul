<?php

namespace App\Repositories;

use App\Models\Document;
use App\Repositories\Interfaces\DocumentRepositoryInterface;

class DocumentRepository implements DocumentRepositoryInterface
{
    public function telecharger(int $document_id){

    }
    
    public function supprimer(int $document_id){

    }
    
    public function getById(int $document_id){

    }
    
    public function getByRendezVousId(int $rendez_vous_id){

    }
    
    public function uploader(int $rendez_vous_id, string $nom_fichier, string $chemin, string $type_fichier){

    }
    
    
}