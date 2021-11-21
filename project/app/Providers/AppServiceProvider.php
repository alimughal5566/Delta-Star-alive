<?php

namespace App\Providers;

use App\Models\WhatWeDo;
use Illuminate\Support\ServiceProvider;

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
        view()->composer('frontend.layout.topnav', function($view) {
            $whatwedos=WhatWeDo::all();
            $view->with('whatwedos', $whatwedos);
        });
    }
}
