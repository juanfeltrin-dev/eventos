<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function index()
    {
        return State::select(['id', 'name'])->orderBy('name')->get();
    }
}
