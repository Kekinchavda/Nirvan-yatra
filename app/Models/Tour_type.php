<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tour_type extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'tour_type';
    protected $fillable = [
        'name',
        'status',
        'order_number',
    ];

    public function tours()
    {
        return $this->hasMany(Tours::class, 'tour_type_id');
    }

}
