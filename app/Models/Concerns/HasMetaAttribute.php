<?php

namespace App\Models\Concerns;

use Illuminate\Support\Arr;

trait HasMetaAttribute
{
    public function initializeHasMetaAttribute(): void
    {
        $this->casts['meta'] = 'object';
    }

    public function setMetaAttribute($value): void
    {
        collect(Arr::dot(['meta' => $value]))->each(function ($value, $key) {
            $this->setAttribute(str_replace('.', '->', $key), $value);
        });
    }
}
