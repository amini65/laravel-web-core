<?php

namespace Modules\RolePermissions\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\RolePermissions\Providers\RouteServiceProvider;

class RolePermissionsServiceProvider extends ServiceProvider
{
    public function register()
    {
//        $this->loadRoutesFrom(__DIR__ . '/../Routes/role_permissions_routes.php');
//        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
//        $this->loadViewsFrom(__DIR__ . '/../Resources/Views/', 'RolePermissions');
//        $this->loadJsonTranslationsFrom(__DIR__ . "/../Resources/Lang");

        $this->app->register(RouteServiceProvider::class);
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
        $this->loadViewsFrom( __DIR__ . '/../Resources/views', 'Role');
        $this->loadJsonTranslationsFrom(__DIR__ . "/../Resources/lang");
    }

    public function boot()
    {

    }
}
