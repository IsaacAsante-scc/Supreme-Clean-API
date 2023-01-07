<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'custom_packages_id',
        'detail_packages_id',
        'schedules_id',
        'payments_id',
        'order_complete',
        'notes'
    ];

}
