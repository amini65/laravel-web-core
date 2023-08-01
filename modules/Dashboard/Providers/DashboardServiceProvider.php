<?php

namespace Modules\Dashboard\Providers;

use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    protected $moduleName = 'Dashboard';
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
        $this->loadViewsFrom( __DIR__ . '/../Resources/views', $this->moduleName);
        $this->loadJsonTranslationsFrom(__DIR__ . "/../Lang");

    }

    public function boot()
    {
        $this->app->booted(function () {
            config()->set('sidebar.items.dashboard', [
                "icon" => "i-dashboard",
                "title" => __('dashboard'),
                "url" => route('dashboard')
            ]);
        });
    }
}
