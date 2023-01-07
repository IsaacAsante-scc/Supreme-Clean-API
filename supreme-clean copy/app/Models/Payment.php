<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    // Model to tell Laravel everything in payment table

    protected $fillable = [
        'info',
        'complete',
        'online',
        'name',
        'total'
    ];
}
