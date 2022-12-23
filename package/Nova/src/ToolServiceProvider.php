<?php

namespace Salt\Nova;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Facade;
use Salt\Nova\Http\Middleware\HandleInertiaRequests;
use Inertia\ServiceProvider as InertiaServiceProvider;

class ToolServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Route::bind('entity', function ($entity) {
            return Facade::guestEntity($entity);
        });

        Nova::script('salt-nova', __DIR__.'/../public/js/app.js');
        Nova::style('salt-nova', __DIR__.'/../public/css/app.css');

        $this->app->register(InertiaServiceProvider::class);
        $this->app->router->aliasMiddleware('salt.inertia', HandleInertiaRequests::class);

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'salt');
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');

        // $this->publishes([
        //     __DIR__.'/../public' => public_path('vendor/salt'),
        // ], 'salt');

    }

}
