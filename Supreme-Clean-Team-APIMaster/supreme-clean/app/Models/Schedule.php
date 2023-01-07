<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    // Model to tell Laravel everything in schedule table

    protected $fillable = [
        'date',
        'booked'
    ];
}
