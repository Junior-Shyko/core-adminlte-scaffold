<?php

namespace Coredigital\Scaffold;

use Illuminate\Support\ServiceProvider;

class CoreScaffoldProvider extends ServiceProvider
{
    /**
     * Boot method. teste
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/Templates/stubs' => base_path('resources/stubs')
        ]);
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        /*
        |--------------------------------------------------------------------------
        | Register the Commands
        |--------------------------------------------------------------------------
        */
        $this->commands([
            \Coredigital\Scaffold\Console\ScaffoldGenerator::class
        ]);
    }
}