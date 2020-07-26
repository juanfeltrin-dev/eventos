<?php

namespace App;

use App\Traits\IncrementVisits;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use IncrementVisits;

    protected $fillable = [
        'name', 'visits'
    ];
}
