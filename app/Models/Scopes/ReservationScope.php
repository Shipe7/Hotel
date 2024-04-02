<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

trait ReservationScope
{
    /**
     * The "booted" method of the model.
     */
    public static function bootReservationScope(): void
    {
        static::addGlobalScope(function (Builder $builder) {
            /*$builder->latest('checkin_at');*/
            $builder->orderByDesc('id');
        });
    }

    public function scopeSearch(Builder $builder, string $keyword = null): void
    {
        $builder->when(request('q', $keyword),
            fn ($builder, $keyword) => $builder->whereRelation('room', 'name', 'like', "{$keyword}%")->orWhereHas(
                'user', fn ($builder) => $builder->search()
            )
        );
    }

    /**
     * Scope a query to only include active reservations by date.
     */
    public function scopeActive(Builder $builder, bool $shouldUseSession = true): void
    {
        if ($shouldUseSession && session('booking')) {
            $booking = session('booking');

            $builder->where('checkin_at', '<=', $booking->checkout_at)
                ->where('checkout_at', '>=', $booking->checkin_at);
        }
    }

    /**
     * Scope the query to only include reservations that are in progress.
     */
    public function scopeActiveToday(Builder $builder): void
    {
        $builder->whereRaw("? BETWEEN checkin_at AND checkout_at", [now()]);
    }

    /**
     * Scope the query to only include reservations that are in progress or upcoming.
     */
    public function scopeActiveOrUpcoming(Builder $builder): void
    {
        $builder->where('checkout_at', '>=', now());
    }

    /**
     * Scope the query to only include reservations that are viewable by the auth user.
     */
    public function scopeViewable(Builder $builder): void
    {
        $builder->when(user()->isAdmin(),
            fn ($builder) => $builder->has('user')->with('agent')
        )->when(user()->isAgent(),
            fn ($builder) => $builder->whereBelongsTo(user(), 'agent')
        )->when(user()->isCustomer(),
            fn ($builder) => $builder->whereBelongsTo(user())->withoutEagerLoad(['user'])
        )->search();
    }

    public function scopePeriod(Builder $builder, $start, $end): void
    {
        $builder->where('checkin_at', '<=', $end)->where('checkout_at', '>=', $start);
    }
}
