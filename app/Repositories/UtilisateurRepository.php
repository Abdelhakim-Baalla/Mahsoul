<?php

namespace App\Repositories;

use App\Models\Utilisateur;
use App\Repositories\Interfaces\UtilisateurRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class UtilisateurRepository implements UtilisateurRepositoryInterface
{
    public function create(array $data)
    {
       
        $data['password'] = Hash::make($data['password']);
        return Utilisateur::create($data);
    }

    public function findByEmail(string $email)
    {
        return Utilisateur::where('email', $email)->first();
    }

    public function getAllUtilisateurs()
    {
        return Utilisateur::paginate(5);
    }

    public function getById( $id)
    {
        return Utilisateur::find($id);
    }
    
    public function modifierProfil(int $id, array $data)
    {
        $utilisateur = $this->getById($id);

        return $utilisateur->update($data);
    }
    
    public function connexion(string $email, string $password)
    {
        $utilisateur = $this->findByEmail($email);
        
        if (!$utilisateur || !Hash::check($password, $utilisateur->password) ){
            throw \Illuminate\Validation\ValidationException::withMessages([
                'errorLogin' => ['L\'émail ou le mot de passe sont incorrect.'],
            ]);
        }
        
        
        return $utilisateur;
    }

    
    
    public function countUsers(){
        return Utilisateur::get()->count();
    }
    
    public function deconnexion()
    {
        // Typically handled by Laravel's auth system
        // But for repository pattern, we can add a method for future use
        return true;
    }
    
    public function inscription(array $data)
    {
        return $this->create($data);
    }
}