<?php

namespace Modules\Product\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    protected $moduleNamespace = 'Modules\Product\Http\Controllers';
    protected $prefix = 'panel';


    public function boot()
    {
        parent::boot();
    }

    public function map()
    {
        $this->mapWebRoutes();
    }

    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->prefix($this->prefix)
            ->namespace($this->moduleNamespace)
            ->group(__DIR__ .'/../Routes/web.php');
    }
}
