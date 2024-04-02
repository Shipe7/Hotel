<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EventResource;
use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CalendarRoomController extends Controller
{
    public function index(Request $request)
    {
        return Room::filter()->get()->map(fn ($room) => [
            'id'    => dechex($room->id),
            'title' => $room->name,
        ]);
    }
}
