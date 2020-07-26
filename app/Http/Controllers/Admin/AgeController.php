<?php

namespace App\Http\Controllers\Admin;

use App\AgeRating;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgeController extends Controller
{
    public function index()
    {
        return AgeRating::all(['id', 'age', 'image']);
    }
}
