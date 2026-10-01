<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $table = 'workers';

    protected $fillable = [
        'farm_id', 'nom', 'prenom', 'telephone', 'cin', 'poste',
        'salaire_journalier', 'date_embauche', 'actif'
    ];

    protected $casts = [
        'actif' => 'boolean',
        'date_embauche' => 'date',
    ];

    public function farm()
    {
        return $this->belongsTo(Farm::class, 'farm_id');
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'worker_id');
    }

    public function tasks()
    {
        return $this->hasMany(FarmTask::class, 'worker_id');
    }
}
