<?php

namespace App\Repositories\Interfaces;

interface TagRepositoryInterface
{
    public function ajouterTag(string $nom);
    public function getAllTags();
    public function getTagById(int $id);
    public function modifierTag(int $id, array $data);
    public function supprimerTag(int $id);
}