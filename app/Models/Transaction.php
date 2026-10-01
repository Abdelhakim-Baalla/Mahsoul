<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'farm_id', 'type', 'categorie', 'montant', 'date', 'description', 'reference'
    ];

    protected $casts = [
        'date' => 'date',
    ];

    public function farm()
    {
        return $this->belongsTo(Farm::class, 'farm_id');
    }
}
