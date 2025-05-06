<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    protected $table = 'commentaires';

    protected $fillable = [
        'article', 'utilisateur', 'contenu'
    ];

    public function article(){
        return $this->belongsTo(Article::class);
    }

    public function utilisateur(){
        return $this->belongsTo(Utilisateur::class);
    }
}
