<?php

namespace App\Models;

use App\Models\Collections\ReservationCollection;
use App\Models\Concerns\InteractsWithReservationAttributes;
use App\Models\Concerns\ObservesWrites;
use App\Models\Scopes\ReservationScope;
use App\Observers\Observable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory, SoftDeletes, ObservesWrites, InteractsWithReservationAttributes, ReservationScope, Observable;

    /**
     * Create a new Eloquent Collection instance.
     *
     * @param  array  $models
     * @return ReservationCollection()
     */
    public function newCollection(array $models = [])
    {
        return new ReservationCollection($models);
    }

    /**
     * The attributes that aren't mass assignable.
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'checkin_at'  => 'datetime',
        'checkout_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     */
    protected $appends = ['refundable'];

    /**
     * Get the users that can be notified for this reservation.
     */
    public function notifiables(): mixed
    {
        return collect([$this->user, $this->agent])->filter()->merge(
            User::admin()->notifiable()->get()
        );
    }

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withTrashed();
    }
}
