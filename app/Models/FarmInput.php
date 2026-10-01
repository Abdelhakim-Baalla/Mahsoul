<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FarmInput extends Model
{
    use HasFactory;

    protected $table = 'farm_inputs';

    protected $fillable = [
        'farm_id', 'nom', 'type', 'unite', 'quantite_stock', 'seuil_alerte', 'prix_unitaire'
    ];

    public function farm()
    {
        return $this->belongsTo(Farm::class, 'farm_id');
    }

    public function usages()
    {
        return $this->hasMany(InputUsage::class, 'input_id');
    }
}
