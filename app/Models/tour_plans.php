<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tour_plans extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['tour_id', 'itinerary','pdf'];


    public function tour()
    {
        return $this->belongsTo(Tours::class);
    }

}
