<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name', 'state_id'
    ];

    protected $hidden = [
    'state_id', 'created_at', 'updated_at',
];
}
