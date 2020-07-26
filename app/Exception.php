<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exception extends Model
{
    protected $fillable = [
        'message',
        'file',
        'line',
        'trace'
    ];
}
