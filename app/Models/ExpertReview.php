<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpertReview extends Model
{
    use HasFactory;

    protected $table = 'expert_reviews';

    protected $fillable = [
        'expert', 'client', 'note', 'commentaire'
    ];

    public function expertUser()
    {
        return $this->belongsTo(Utilisateur::class, 'expert');
    }

    public function clientUser()
    {
        return $this->belongsTo(Utilisateur::class, 'client');
    }
}
