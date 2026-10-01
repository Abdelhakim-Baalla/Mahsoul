<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FarmTask extends Model
{
    use HasFactory;

    protected $table = 'farm_tasks';

    protected $fillable = [
        'farm_id', 'parcel_id', 'worker_id', 'titre', 'description',
        'date_prevue', 'date_realisee', 'statut', 'priorite'
    ];

    protected $casts = [
        'date_prevue' => 'date',
        'date_realisee' => 'date',
    ];

    public function farm()
    {
        return $this->belongsTo(Farm::class, 'farm_id');
    }

    public function parcel()
    {
        return $this->belongsTo(Parcel::class, 'parcel_id');
    }

    public function worker()
    {
        return $this->belongsTo(Worker::class, 'worker_id');
    }
}
