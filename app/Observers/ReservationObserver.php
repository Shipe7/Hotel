<?php

namespace App\Observers;

use App\Jobs\ApplyPromoToReservation;
use App\Models\Reservation;
use App\Models\User;
use App\Notifications\ReservationCancelled;
use App\Notifications\ReservationCreated;
use App\Notifications\ReservationDiscounted;
use App\Notifications\ReservationExtended;
use App\Notifications\ReservationPaymentLink;
use Illuminate\Support\Facades\Notification;

class ReservationObserver
{
    /**
     * Handle the Reservation "saving" event.
     */
    public function saving(Reservation $reservation): void
    {
        /*if ($reservation->isDirty('room_id')) {
            $reservation->unsetRelation('room')->fill([
                'room_price'            => $reservation->room->price,
                'room_security_deposit' => $reservation->room->security_deposit
            ]);
        }*/
    }

    /**
     * Handle the Reservation "creating" event.
     */
    public function creating(Reservation $reservation): void
    {
        /*if (user()?->isAgent()) {
            $reservation->agent()->associate(user());
        }

        if ($reservation->hasPromo()) {
            ApplyPromoToReservation::dispatch($reservation)->withoutSaving();
        }*/
    }

    /**
     * Handle the Reservation "created" event.
     */
    public function created(Reservation $reservation): void
    {
        /*Notification::send(User::admin()->notifiable()->get(),
            new ReservationCreated($reservation)
        );

        Notification::send(collect([$reservation->user, $reservation->agent])->filter(),
            new ReservationPaymentLink($reservation)
        );*/
    }

    /**
     * Handle the Reservation "updated" event.
     */
    public function updated(Reservation $reservation): void
    {
        /*if ($reservation->wasExtended()) {
            Notification::send($reservation->notifiables(), new ReservationExtended($reservation));
        }

        if ($reservation->wasChanged('discount')) {
            Notification::send($reservation->notifiables(), new ReservationDiscounted($reservation));
        }*/
    }

    /**
     * Handle the Reservation "deleted" event.
     */
    public function deleted(Reservation $reservation): void
    {
        /*Notification::send($reservation->notifiables(), new ReservationCancelled($reservation));*/
    }
}
