<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'phone',
        'consultationType',
        'description',
        'date',
        'timeSlot'
    ];

    protected $casts = [
        'date' => 'datetime'
    ];
}
