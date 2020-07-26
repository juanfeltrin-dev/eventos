<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\AgeRating;
use App\Category;
use App\Event;
use App\Http\Requests\StoreEvent;
use App\State;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return Event::all();
    }

    public function store(StoreEvent $request)
    {
        $event = new Event();

        $event->fill($request->all());

        $event->save();

        return response()->json([], 201);
    }
}
