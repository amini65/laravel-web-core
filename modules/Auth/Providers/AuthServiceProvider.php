<?php

namespace Modules\Auth\Providers;

use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $moduleName = 'Auth';
    protected $moduleNameLower = 'auth';
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
        $this->loadViewsFrom( __DIR__ . '/../Resources/views', 'Auth');

    }

    public function boot()
    {

    }
}

