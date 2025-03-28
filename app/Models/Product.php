<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes , HasFactory;

    protected $fillable = [
        'title',
        'price',
        'description',
        'category',
        'image',
        'rating_rate',
        'rating_count',
    ];



}
