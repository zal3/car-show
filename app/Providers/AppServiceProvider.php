<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('admin', function () {
            return auth()->check() && auth()->user()->is_admin;
        });

        Blade::if('superAdmin', function () {
            return auth()->check() && auth()->user()->is_admin && (auth()->user()->id == 1);
        });

        Blade::if('user', function () {
            return auth()->check() && !auth()->user()->is_admin;
        });
    }
}