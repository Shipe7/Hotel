<?php

namespace App\Models\Collections;

use Illuminate\Database\Eloquent\Collection;

class ReservationCollection extends Collection
{
    public function sumDaysInPeriod($start , $end)
    {
        return $this->sum(
            fn ($reservation) => max($reservation->checkin_at, $start)->toPeriod(min($reservation->checkout_at, $end))->count()
        );
    }
}
