<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputUsage extends Model
{
    use HasFactory;

    protected $table = 'input_usages';

    protected $fillable = [
        'input_id', 'parcel_id', 'lot_id', 'quantite', 'date', 'note'
    ];

    protected $casts = [
        'date' => 'date',
    ];

    public function input()
    {
        return $this->belongsTo(FarmInput::class, 'input_id');
    }

    public function parcel()
    {
        return $this->belongsTo(Parcel::class, 'parcel_id');
    }

    public function lot()
    {
        return $this->belongsTo(HarvestLot::class, 'lot_id');
    }
}
