<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tour_overviews extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['tour_id', 'overview', 'highlights'];
    protected $casts = [
        'highlights' => 'array',
    ];

    public function tour()
    {
        return $this->belongsTo(tours::class);
    }

}
