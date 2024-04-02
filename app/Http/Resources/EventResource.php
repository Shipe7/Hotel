<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            'id'            => dechex($this->id),
            'resourceId'    => dechex($this->room_id),
            'start'         => $this->checkin_at/*->subHour(1)*/,
            'end'           => $this->checkout_at/*->addHour(1)*/,
            'title'         => $this->user->name,
            'summary'       => $this->summary,
            'className'     => $this->getClassName(),
            'editable'      => false,
            'url'           => route('reservations.show', $this),
        ];
    }

    /**
     * Get the appropriate css class names for the event.
     */
    public function getClassName(): string
    {
        return collect([
            'ps-3'          => true,
            'pt-1'          => true,
            'pb-3'          => true,
            'mb-0'          => true,
            'mx-20'         => false,
            'h-px'          => true,
            'border-0'      => true,
            'bg-success'    => $this->isCheckedIn(),
            'bg-warning'    => $this->isCheckedOut(),
            'bg-secondary'  => $this->isDueIn(),
            'bg-danger'     => $this->isDueOut(),
        ])->filter()->keys()->implode(' ');
    }
}
