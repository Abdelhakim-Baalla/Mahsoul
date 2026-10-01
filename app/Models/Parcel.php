<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    use HasFactory;

    protected $table = 'parcels';

    protected $fillable = [
        'farm_id', 'nom', 'superficie', 'culture', 'variete', 'date_semis', 'statut'
    ];

    protected $casts = [
        'date_semis' => 'date',
    ];

    public function farm()
    {
        return $this->belongsTo(Farm::class, 'farm_id');
    }

    public function tasks()
    {
        return $this->hasMany(FarmTask::class, 'parcel_id');
    }

    public function lots()
    {
        return $this->hasMany(HarvestLot::class, 'parcel_id');
    }
}
