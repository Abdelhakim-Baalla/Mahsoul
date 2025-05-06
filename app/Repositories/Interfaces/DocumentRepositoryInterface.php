<?php

namespace App\Repositories\Interfaces;

interface DocumentRepositoryInterface
{
    public function telecharger(int $document_id);
    public function supprimer(int $document_id);
    public function getById(int $document_id);
    public function getByRendezVousId(int $rendez_vous_id);
    public function uploader(int $rendez_vous_id, string $nom_fichier, string $chemin, string $type_fichier);
}