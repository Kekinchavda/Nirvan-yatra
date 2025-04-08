<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tours extends Model
{
    use HasFactory;
    public function overview()
    {
        return $this->hasOne(tour_overviews::class);
    }

    public function amenities()
    {
        return $this->hasMany(tour_amenities::class);
    }

    public function plans()
    {
        return $this->hasMany(tour_plans::class);
    }

}
