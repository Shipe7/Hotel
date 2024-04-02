<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $rooms_count                = Room::count();
        $reservations               = Reservation::all();
        $reservations_count         = $reservations->count();
        $new_bookings_count         = $reservations->filter(fn ($value) => $value->checkin_at->isFuture())->count();
        $checkin_count              = $reservations->filter(fn ($value) => $value->checkin_at->istoday())->count();
        $checkout_count             = $reservations->filter(fn ($value) => $value->checkout_at->istoday())->count();
        $booked_count               = $reservations->filter(fn ($value) => $value->created_at->istoday())->count();
        $active_reservations_count  = Reservation::activeToday()->count();

        $occupancyStatistics = collect(Carbon::now()->subMonths(11)->toPeriod(now(), '1month'))
            ->mapWithKeys(function ($month) use($rooms_count) {
                $start          = $month->copy()->startOfMonth();
                $end            = $month->copy()->endOfMonth();
                $occupiedDays   = Reservation::query()->period($start, $end)->get()->sumDaysInPeriod($start, $end);

                return [$month->format('M') => $rooms_count ? round(($occupiedDays / ($month->daysInMonth * $rooms_count)) * 100) : 0];
            });

        return view('dashboard.index',
            compact(['occupancyStatistics', 'rooms_count', 'active_reservations_count', 'new_bookings_count', 'reservations_count', 'checkin_count', 'checkout_count', 'booked_count'])
        );
    }
}
