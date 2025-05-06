<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinaire extends Utilisateur
{
    use HasFactory;

    protected $table = 'veterinaires';
    
    protected $fillable = [
        'specialite', 'diplome', 'annee_experience', 'prix_deplacement', 'compte'
    ];

    public function rendezVous(){
        return $this->hasMany(RendezVous::class);
    }
}
