<?php

namespace Fuyuan9\DiffView\Tests;

use Filament\FilamentServiceProvider;
use Fuyuan9\DiffView\DiffViewServiceProvider;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

/**
 * Base TestCase for the package.
 * Uses Orchestra Testbench to simulate the Filament and Laravel environment.
 */
class TestCase extends Orchestra
{
    /**
     * Define the package providers to load in the test environment.
     */
    protected function getPackageProviders($app)
    {
        return [
            LivewireServiceProvider::class,
            FilamentServiceProvider::class,
            DiffViewServiceProvider::class,
        ];
    }
}
