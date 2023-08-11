<?php

namespace Modules\User\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\User\Providers\RouteServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    protected $moduleName = 'User';
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadViewsFrom( __DIR__ . '/../Resources/views', $this->moduleName);
        $this->loadJsonTranslationsFrom(__DIR__ . "/../Lang");

    }

    public function boot()
    {
        config()->set('sidebar.items.users', [
            'main'=>[
                "icon"=>"user",
                "title"=>__('users'),
                "url"=>route('users.index')
            ],
            'sub'=>[
                ["title"=>__('user'),"url"=>route('users.index')],
            ]
        ]);
    }
}
