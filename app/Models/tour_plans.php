<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tour_plans extends Model
{
    use HasFactory;
    protected $fillable = ['tour_id', 'itinerary','pdf'];


    public function tour()
    {
        return $this->belongsTo(Tours::class);
    }

}
