<?php

namespace App\Models\Concerns;

use App\Models\Room;
use Carbon\CarbonPeriod;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Date;

trait InteractsWithReservationAttributes
{
    public function name(): Attribute
    {
        return Attribute::get(fn () => "{$this->room->name} ({$this->user->name}) #{$this->id}");
    }

    public function checkinAt(): Attribute
    {
        return Attribute::set(fn ($value) => Date::make($value)->setTime(12, 0));
    }

    public function checkoutAt(): Attribute
    {
        return Attribute::set(fn ($value) => Date::make($value)->setTime(11, 59));
    }

    public function period(): Attribute
    {
        return Attribute::get(fn () => CarbonPeriod::create($this->checkin_at, $this->checkout_at));
    }

    public function days(): Attribute
    {
        return Attribute::get(fn () => $this->checkin_at->diffInDays($this->checkout_at) + 1);
    }

    public function daysStr(): Attribute
    {
        return Attribute::get(fn () => str("$this->days day")->plural($this->days));
    }

    public function price(): Attribute
    {
        return Attribute::get(fn () => ($this->room_price * $this->days));
    }

    public function amount(): Attribute
    {
        return Attribute::get(function () {
            return ($this->price - $this->discount_amount) + $this->orders->sum('amount');
        });
    }

    public function amountPaid(): Attribute
    {
        return Attribute::get(fn () => $this->paidTransactions->sum('amount'));
    }

    /**
     * Get the excess amount refundable for the reservation.
     */
    public function refundable(): Attribute
    {
        return Attribute::get(
            fn () => max($this->amount_paid - $this->amount, 0)
        );
    }

    /**
     * @deprecated
     */
    public function paymentStatus(): Attribute
    {
        return Attribute::get(fn () => $this->amount_paid >= $this->amount ? 'paid' : 'pending');
    }

    /**
     * Get the human friendly summary of the reservation.
     */
    public function summary(): Attribute
    {
        return Attribute::get(function () {
            if ($this->period->isInProgress()) {
                if ($this->checkout_at->isToday() || $this->checkout_at->isTomorrow()) {
                    return "Checking out {$this->checkout_at->fromNow()}";
                }

                return 'Currently Active';
            }

            if ($this->checkin_at->isFuture()) {
                return "Arriving {$this->checkin_at->fromNow()}";
            }

            return "Checked out {$this->checkout_at->ago()}";
        });
    }

    public function status(): Attribute
    {
        return Attribute::get(function () {
            if ($this->isDueIn()) {
                return 'Due In';
            }
            if ($this->isDueOut()) {
                return 'Due Out';
            }
            if ($this->isCheckedIn()) {
                return 'Checked In';
            }
            if ($this->isCheckedOut()) {
                return 'Checked Out';
            }
            if ($this->isConfirmed()) {
                return 'Confirmed';
            }

            return "Checked out {$this->checkout_at->ago()}";
        });
    }

    public function numberOfGuests(): Attribute
    {
        return Attribute::get(function ($value)
        {
            if (! $value) {
                return '&nbsp;';
            }
            elseif ($value == 1) {
                return "{$value} guest";
            } else {
                return "{$value} guests";
            }
        });
    }

    /**
     * Determine if the reservation is fully paid.
     */
    public function isFullyPaid(): bool
    {
        return $this->amountPayable() <= 0;
    }

    /**
     * Get the current amount payable for the reservation.
     */
    public function amountPayable(): int
    {
        $payable = $this->amount + $this->room_security_deposit - $this->amount_paid;

        return max($payable, 0);
    }

    /**
     * Determine if the reservation duration has expired.
     */
    public function hasExpired(): bool
    {
        return $this->checkout_at->isPast();
    }

    /**
     * Determine if the reservation was extended to a later date.
     */
    public function wasExtended(): bool
    {
        return $this->checkout_at->isAfter($this->getOriginal('checkout_at'));
    }

    public function isConfirmed(): bool
    {
        return $this->checkin_at->isFuture();
    }

    public function isCheckedIn(): bool
    {
        return $this->period->isInProgress();
    }

    public function isCheckedOut(): bool
    {
        return $this->checkout_at->isPast();
    }

    public function isDueIn(): bool
    {
        return $this->checkin_at->isFuture() && ($this->checkin_at->isToday() || $this->checkin_at->isTomorrow());
    }

    public function isDueOut(): bool
    {
        return $this->isCheckedIn() && ($this->checkout_at->isToday() || $this->checkout_at->isTomorrow());
    }
}
