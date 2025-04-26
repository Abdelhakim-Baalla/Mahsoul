<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $table = 'commandes';

    protected $fillable = [
        'client', 'date_commande', 'total', 'statut', 'methode_paiment', 'reference_paiment', 'adresse_livraison', 'frais_livraison'
    ];

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function orderItems(){
        return $this->belongsToMany(OrderItem::class);
    }
}
