<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RendezVous extends Model
{
    use HasFactory;

    protected $table = 'rendez_vous'; 

    protected $fillable = ['client', 'expert', 'statut', 'description', 'date_reserver', 'sujet', 'adresse', 'telephone', 'total'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function veterinaire()
    {
        return $this->belongsTo(Veterinaire::class);
    }

    public function agricole()
    {
        return $this->belongsTo(Agricole::class);
    }

    public function document()
    {
        return $this->hasMany(Document::class);
    }
}
