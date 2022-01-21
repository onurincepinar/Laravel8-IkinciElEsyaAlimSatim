<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_id',
        'total',
        'name',
        'email',
        'address',
        'phone',
        'note',
        'IP',
        'cart_number',
        'valid_date',
        'cvv'
    ];
}
