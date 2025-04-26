<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Utilisateur
{
    use HasFactory;

    protected $table = 'clients';
    
    protected $fillable = [
        'type_expoitation', 'nombre_animaux', 'superficie_terres'
    ];

    public function rendezVous(){
        return $this->hasMany(RendezVous::class);
    }

    public function commande(){
        return $this->hasMany(Commande::class);
    }
}
