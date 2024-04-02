<?php

namespace App\Observers;

use App\Models\Room;
use Illuminate\Support\Str;

class RoomObserver
{
    /**
     * Handle the Room "creating" event.
     */
    public function creating(Room $room)
    {
        $room->slug ??= Str::slug($room->name);
        $room->meta ??= ['features' => __('room.features')];
    }

    /**
     * Handle the Room "updated" event.
     */
    public function updated(Room $room)
    {
        //
    }
}
