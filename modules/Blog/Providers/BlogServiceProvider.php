<?php

namespace Modules\Blog\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Blog\Providers\RouteServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    protected $moduleName = 'Blog';
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadViewsFrom( __DIR__ . '/../Resources/views', $this->moduleName);
        $this->loadJsonTranslationsFrom(__DIR__ . "/../Lang");

    }

    public function boot()
    {
        config()->set('sidebar.items.blogs', [
            'main'=>[
                "icon"=>"blog",
                "title"=>__('blogs'),
                "url"=>route('blogs.index')
            ],
            'sub'=>[
                ["title"=>__('blog category'),"url"=>route('blogCategories.index')],
                ["title"=>__('blog'),"url"=>route('blogs.index')],
            ]
        ]);
    }
}
