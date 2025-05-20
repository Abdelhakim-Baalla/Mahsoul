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

    public function getByClientId(int $client){

       return Document::where('client', $client)
        ->groupBy('client', 'id', 'rendez_vous')
        ->paginate(2);
    }
    
    public function uploader($pdfContent, $id, $expert, $client){
        $document = new Document();
        $document->pdf_content = base64_encode($pdfContent);
        $document->rendez_vous = $id;
        $document->expert = $expert;
        $document->client = $client;
        $document->save();
    }
    
    
}