<?php

namespace Modules\Product\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Product\Providers\RouteServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    protected $moduleName = 'Product';
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadViewsFrom( __DIR__ . '/../Resources/views', $this->moduleName);
        $this->loadJsonTranslationsFrom(__DIR__ . "/../Lang");

    }

    public function boot()
    {
        config()->set('sidebar.items.products', [
            'main'=>[
                "icon"=>"product",
                "title"=>__('products'),
                "url"=>route('products.index')
            ],
            'sub'=>[
                ["title"=>__('product category'),"url"=>route('productCategories.index')],
                ["title"=>__('product'),"url"=>route('products.index')],
            ]
        ]);
    }
}
