<?php

declare(strict_types=1);

namespace Faust\ArbitraryAttributes;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

final class ArbitraryAttribute extends Model
{
    protected $guarded = false;

    public function model(): MorphTo
    {
        return $this->morphTo();
    }
}
