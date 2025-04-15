<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tour_amenities extends Model
{
    use HasFactory;
    protected $fillable = ['tour_id', 'included_amenities', 'not_included_amenities'];

    protected $casts = [
        'included_amenities' => 'array',
        'not_included_amenities' => 'array',
    ];


    public function tour()
    {
        return $this->belongsTo(tours::class);
    }

}
