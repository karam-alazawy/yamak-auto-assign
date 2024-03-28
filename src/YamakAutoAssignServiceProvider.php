<?php

namespace Yamak\YamakAutoAssign;

use Illuminate\Support\ServiceProvider;

class YamakAutoAssignServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Publish configuration file
        $this->publishes([
            __DIR__.'/../config/yamak-auto-assign.php' => config_path('yamak-auto-assign.php'),
        ], 'config');

        // Optionally, you can publish other assets like migrations, views, etc.
        // $this->publishes([
        //     __DIR__.'/../path/to/assets' => public_path('vendor/yamak-auto-assign'),
        // ], 'assets');

        // Optionally, you can load your package routes, migrations, etc.
        // $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Merge package configuration with application configuration
        $this->mergeConfigFrom(
            __DIR__.'/../config/yamak-auto-assign.php', 'yamak-auto-assign'
        );

        // Register the service
        $this->app->singleton('yamak-auto-assign', function ($app) {
            return new DriverAssignmentService($app['config']->get('yamak-auto-assign'));
        });
    }
}
