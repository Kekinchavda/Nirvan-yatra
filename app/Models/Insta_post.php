<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insta_post extends Model
{
    use HasFactory;

    protected $table = "insta_posts";
    protected $fillable = ["image"];
}
