<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = [
        'name',
        'class'
    ];

    public function getClassPaymentMethod($id)
    {
        $paymentMethod = self::find($id);

        return new $paymentMethod->class();
    }
}
