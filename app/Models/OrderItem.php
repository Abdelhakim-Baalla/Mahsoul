<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $table = 'order_items';
    
    protected $fillable = [
        'commande', 'produit', 'quantite', 'prix_unitaire'
    ];

    public function produit(){
        return $this->belongsTo(Produit::class);
    }

    public function commande(){
        return $this->hasOne(Commande::class);
    }
}
