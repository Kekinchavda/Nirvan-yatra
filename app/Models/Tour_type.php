<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour_type extends Model
{
    use HasFactory;
    protected $table = 'tour_type';
    protected $fillable = [
        'name',
        'status',
    ];

    public function tours()
    {
        return $this->hasMany(Tours::class, 'tour_type_id');
    }

}
