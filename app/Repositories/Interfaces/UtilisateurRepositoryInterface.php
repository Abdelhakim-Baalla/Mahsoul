<?php

namespace App\Repositories\Interfaces;

interface UtilisateurRepositoryInterface
{
    public function create(array $data);
    public function findByEmail(string $email);
    public function getById(int $id);
    public function modifierProfil(int $id, array $data);
    public function connexion(string $email, string $password);
    public function deconnexion();
    public function inscription(array $data);
    public function countUsers();
    public function getAllUtilisateurs();
}