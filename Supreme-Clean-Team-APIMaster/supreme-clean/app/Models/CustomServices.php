<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomServices extends Model
{
    use HasFactory;

    protected $fillable = [
        'custom_packages_id',
        'service_items_id'
    ];
}
