<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class Auth2ServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('auth2', 'App\Services\Auth2');
    }
}
