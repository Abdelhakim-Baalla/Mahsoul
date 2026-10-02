<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    use HasFactory;

    protected $table = 'product_reviews';

    protected $fillable = [
        'produit', 'utilisateur', 'note', 'commentaire'
    ];

    public function produit()
    {
        return $this->belongsTo(Produit::class, 'produit');
    }

    public function auteur()
    {
        return $this->belongsTo(Utilisateur::class, 'utilisateur');
    }
}
