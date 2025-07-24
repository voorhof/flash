<?php

namespace Voorhof\Flash;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class FlashServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/flash.php', 'flash'
        );

        $this->app->singleton(FlashService::class, function (Application $app) {
            return new FlashService;
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Publish configuration
        $this->publishes([
            __DIR__.'/../config/flash.php' => config_path('flash.php'),
        ], 'flash-config');

        // Publish views
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/flash'),
        ], 'flash-views');

        // Load views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'flash');
    }

}
