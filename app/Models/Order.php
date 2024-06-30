<?php

namespace App\Models;

use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id', 'number', 'total_price', 'status', 'shipping_price', 'notes',
    ];

    protected $casts = [
        'status' => OrderStatus::class
    ];
}
