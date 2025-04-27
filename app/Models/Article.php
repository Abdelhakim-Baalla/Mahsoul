<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $fillable = [
        'titre',
        'contenu',
        'auteur',
        'photo',
        'categorie',
        'categorie_id',
        'statut'
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function commentaire()
    {
        return $this->hasMany(Commentaire::class);
    }

    public function tag()
    {
        return $this->hasMany(Tag::class);
    }

    public function categorie()
    {
        return $this->hasOne(Categorie::class);
    }
}
