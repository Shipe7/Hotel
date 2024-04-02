<?php

namespace App\Http\Controllers;

use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::with('room', 'user')->get();

        return view('reservations.index', compact('reservations'));
    }

    public function show(Reservation $reservation)
    {
        return view('reservations.show', compact('reservation'));
    }

    public function create()
    {
        return view('reservations.create');
    }
}
