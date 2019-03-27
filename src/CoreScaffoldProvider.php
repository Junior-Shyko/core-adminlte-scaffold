
<?php
namespace Coredigital\Scaffold;
use Grafite\FormMaker\FormMakerProvider;
use Illuminate\Support\ServiceProvider;
class CoreScaffoldProvider extends ServiceProvider
{
    /**
     * Boot method.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/Templates' => base_path('resources')
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
        | Providers
        |--------------------------------------------------------------------------
        */
        if (class_exists('Illuminate\Foundation\AliasLoader')) {
            $this->app->register(FormMakerProvider::class);
        }
        /*
        |--------------------------------------------------------------------------
        | Register the Commands
        |--------------------------------------------------------------------------
        */
        $this->commands([
            Core\Scaffold\Console\ScaffoldGenerator::class
        ]);
    }
}