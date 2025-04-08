<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tour_overviews extends Model
{
    use HasFactory;
    protected $fillable = ['tour_id', 'overview'];

    public function tour()
    {
        return $this->belongsTo(tours::class);
    }

}
