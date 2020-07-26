<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgeRating extends Model
{
    protected $fillable = [
        'age', 'image'
    ];
}
