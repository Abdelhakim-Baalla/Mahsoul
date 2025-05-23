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

    public function commentaire(){
        return $this->hasMany(Commentaire::class);
    }

    public function agricole()
    {
        return $this->hasOne(Agricole::class, 'compte');
    }

    public function veterinaire()
    {
        return $this->hasOne(Veterinaire::class, 'compte');
    }

    public function client()
    {
        return $this->hasOne(Client::class, 'compte');
    }

    public function admin()
    {
        return $this->hasOne(Admin::class, 'compte');
    }
  
}

