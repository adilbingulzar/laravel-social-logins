<?php

namespace Social\Logins;

use Illuminate\Support\ServiceProvider;
use Laravel\Socialite\Facades\Socialite;

class LoginServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','logins');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        // Merge configuration for Socialite
        $this->mergeConfigFrom(__DIR__.'/config/services.php', 'services');

        // Alias Socialite facade
        $this->app->alias(Socialite::class, 'Socialite');
    }
}
