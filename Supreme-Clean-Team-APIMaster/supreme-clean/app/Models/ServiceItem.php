<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceItem extends Model
{
    use HasFactory;

    // Model to tell Laravel everything in service item table

    protected $fillable = [
        'title',
        'description'
    ];

    // Example of "Casts" to transform attribute value
    // protected $casts = [
    //    'likes' => 'integer',
    // ];

}
