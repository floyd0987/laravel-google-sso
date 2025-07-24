<?php

namespace GoogleSSO;

use Illuminate\Support\ServiceProvider;

class GoogleSSOServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->publishes([
            __DIR__.'/../config/google-sso.php' => config_path('google-sso.php'),
        ], 'google-sso-config');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/google-sso.php', 'google-sso');
    }
}
