<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $table = 'produits';

    protected $fillable = [
        'nom', 'description', 'prix', 'quantite', 'unite_mesure', 'categorie', 'image', 'en_stock'
    ];

    public function tag(){
        return $this->hasMany(Tag::class);
    }

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function orderItems(){
        return $this->belongsToMany(OrderItem::class);
    }
}
