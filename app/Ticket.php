<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'event_id',
        'status',
        'value',
        'half_entry',
        'generation_date'
    ];
}
