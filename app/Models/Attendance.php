<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'attendances';

    protected $fillable = [
        'worker_id', 'date', 'present', 'heures', 'prime', 'note'
    ];

    protected $casts = [
        'present' => 'boolean',
        'date' => 'date',
    ];

    public function worker()
    {
        return $this->belongsTo(Worker::class, 'worker_id');
    }
}
