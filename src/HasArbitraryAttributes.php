<?php

declare(strict_types=1);

namespace Faust\ArbitraryAttributes;

use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasArbitraryAttributes
{
    public function arbitraryAttributes(): MorphMany
    {
        return $this->morphMany(ArbitraryAttribute::class, 'model');
    }

    public function getArbitraryAttributes(): ArbitraryAttributes
    {
        return new ArbitraryAttributes($this);
    }
}
