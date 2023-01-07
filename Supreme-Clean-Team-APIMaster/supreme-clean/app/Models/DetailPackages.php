<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPackages extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'car_price',
        'mid_price',
        'full_price',
        'description',
        'quick_look'
    ];
}
