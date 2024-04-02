<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EventResource;
use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;

class CalendarReservationController extends Controller
{
    public function index()
    {
        JsonResource::withoutWrapping();

        return EventResource::collection(Reservation::search()->get());
    }
}
