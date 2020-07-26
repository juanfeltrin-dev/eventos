<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class   Photo extends Model
{
    protected $fillable = [
        'src',
        'alt',
        'event_id'
    ];
}
