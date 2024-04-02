<?php

namespace App\Http\Controllers;

use App\Models\Type;

class FrontDeskController extends Controller
{
    public function __invoke()
    {
        $roomTypes = Type::all();

        return view('front-desk.index', compact('roomTypes'));
    }
}
