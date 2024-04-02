<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;

trait RoomScope
{
    public function scopeFilter(Builder $builder): void
    {
        $builder->when(request('type'),
            fn ($builder, $type) => $builder->whereRelation('type', 'slug', $type)
        );
    }

    public function scopeAvailable(Builder $builder, bool $shouldUseSession = true): void
    {
        if ($shouldUseSession && session('booking')) {
            $builder->whereDoesntHave('reservations', fn ($query) => $query->active());

            if ($type = session('booking.type')) {
                $builder->whereType($type);
            }
        }

        $builder->published();
    }

    public function scopePublished(Builder $builder): void
    {
        $builder->whereNotNull('published_at');
    }

    /**
     * Scope the query to only include rooms that are marked as featured.
     */
    public function scopeFeatured(Builder $builder): void
    {
        $builder->whereNotNull('featured_at')->inRandomOrder()->take(4);
    }

    /**
     * Scope the query to order by the most reserved rooms.
     */
    public function scopePopular(Builder $builder): void
    {
        $builder->withCount('reservations')->latest('reservations_count')->take(4);
    }
}
