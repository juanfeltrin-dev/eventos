<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'value',
        'purchase_date',
        'user_id',
        'payment_method_id'
    ];
}
