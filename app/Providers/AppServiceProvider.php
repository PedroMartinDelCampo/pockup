<?php

namespace Pockup\Providers;

use Illuminate\Support\ServiceProvider;

use Pockup\API;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('api', API::toJson());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
