<?php

namespace Nicoaudy\Noty;

use Illuminate\Support\ServiceProvider;

class NotyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/noty.php' => config_path('noty.php'),
            ], 'config');

            $this->publishes([
                __DIR__ . '/../resources/views' => base_path('resources/views/vendor/noty'),
            ], 'views');
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'noty');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/noty.php', 'noty');

        $this->app->singleton('noty', function () {
            return $this->app->make(Noty::class);
        });
    }
}
