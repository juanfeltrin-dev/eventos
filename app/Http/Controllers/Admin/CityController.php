<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index($state)
    {
        return City::select(['id', 'name'])->where('state_id', $state)->orderBy('name')->get();
    }
}
