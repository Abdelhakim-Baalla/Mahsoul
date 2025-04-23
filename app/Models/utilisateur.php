<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Utilisateur extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'utilisateurs'; 

    protected $fillable = [
        'nom', 'prenom', 'email', 'password', 'telephone', 'adresse', 'type', 'photo'
    ];


    public function rendezVousClient()
    {
        return $this->hasMany(RendezVous::class, 'utilisateur');
    }

    public function rendezVousExpert()
    {
        return $this->hasMany(RendezVous::class, 'expert');
    }



  
}

