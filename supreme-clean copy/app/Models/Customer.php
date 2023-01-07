<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Model to tell Laravel everything in payment table

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'address',
        'order_id'
    ];
}
