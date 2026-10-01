<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    use HasFactory;

    protected $table = 'farms';

    protected $fillable = [
        'nom', 'region', 'superficie_totale', 'telephone', 'adresse', 'proprietaire'
    ];

    public function owner()
    {
        return $this->belongsTo(Utilisateur::class, 'proprietaire');
    }

    public function parcels()
    {
        return $this->hasMany(Parcel::class, 'farm_id');
    }

    public function workers()
    {
        return $this->hasMany(Worker::class, 'farm_id');
    }

    public function tasks()
    {
        return $this->hasMany(FarmTask::class, 'farm_id');
    }

    public function inputs()
    {
        return $this->hasMany(FarmInput::class, 'farm_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'farm_id');
    }

    public function lots()
    {
        return $this->hasMany(HarvestLot::class, 'farm_id');
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'farm_id');
    }
}
