<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table = 'tags';
    
    protected $fillable = [
        'nom'
    ];

    public function article(){
        return $this->belongsToMany(Article::class);
    }

    public function produit(){
        return $this->belongsToMany(Produit::class);
    }
}
