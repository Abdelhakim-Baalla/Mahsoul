<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $table = 'documents'; 

    protected $fillable = ['rendez_vous', 'nom', 'chemin', 'type', 'expert', 'client', 'pdf_content'];

    public function rendezVous(){
        return $this->belongsTo(RendezVous::class);
    }
}
