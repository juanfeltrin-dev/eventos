<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Event;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function create()
    {
        $data = [
            'events' => Event::all()
        ];

        return view('coupon.create', $data);
    }
}
