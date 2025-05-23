<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tours extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'tour_type_id',
        'slug',
        'location',
        'activity_type',
        'days',
        'nights',
        'rate',
        'feature_image',
        'from_to',
        'pickup_drop_location',
        'other_charges',
        'locationCover',
        'things_to_carry',
        'terms_conditions',
        'note',
    ];
    public function overview()
    {
        return $this->hasOne(tour_overviews::class, 'tour_id');
    }

    public function plan()
    {
        return $this->hasOne(tour_plans::class, 'tour_id');
    }

    public function amenities()
    {
        return $this->hasOne(tour_amenities::class, 'tour_id');
    }

    public function tourType()
    {
        return $this->belongsTo(Tour_type::class, 'tour_type_id');
    }

}
