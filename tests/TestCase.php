<?php

declare(strict_types=1);

namespace Tests;

use Faust\ArbitraryAttributes\ServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

/**
 * @coversNothing
 */
class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            ServiceProvider::class,
        ];
    }
}
