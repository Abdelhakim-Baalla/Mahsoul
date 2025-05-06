<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Utilisateur
{
    use HasFactory;

    protected $table = 'admins';
    
    protected $fillable = [
        'domaines_expertise', 'contact_urgence'
    ];

    public function article(){
        return $this->hasMany(Article::class);
    }
}
