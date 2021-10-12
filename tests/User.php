<?php

declare(strict_types=1);

namespace Tests;

use Faust\ArbitraryAttributes\HasArbitraryAttributes;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasArbitraryAttributes;

    public $guarded = false;
}
