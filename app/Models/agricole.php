<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agricole extends Utilisateur
{
    use HasFactory;

    protected $table = 'agricoles';
    
    protected $fillable = [
        'ferme', 'produit', 'superficie_terrain', 'region', 'compte'
    ];

    public function rendezVous(){
        return $this->hasMany(RendezVous::class);
    }

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'compte');
    }
}
