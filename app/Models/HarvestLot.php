<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HarvestLot extends Model
{
    use HasFactory;

    protected $table = 'harvest_lots';

    protected $fillable = [
        'farm_id', 'parcel_id', 'code', 'produit', 'quantite', 'unite',
        'date_recolte', 'calibrage', 'destination', 'client_nom', 'statut'
    ];

    protected $casts = [
        'date_recolte' => 'date',
    ];

    public function farm()
    {
        return $this->belongsTo(Farm::class, 'farm_id');
    }

    public function parcel()
    {
        return $this->belongsTo(Parcel::class, 'parcel_id');
    }

    public function inputUsages()
    {
        return $this->hasMany(InputUsage::class, 'lot_id');
    }
}
