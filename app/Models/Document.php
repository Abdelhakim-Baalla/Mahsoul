<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $table = 'documents'; 

    protected $fillable = ['rendez_vous', 'nom_fichier', 'chemin', 'type_fichier'];

    public function rendezVous(){
        return $this->belongsTo(RendezVous::class);
    }
}
