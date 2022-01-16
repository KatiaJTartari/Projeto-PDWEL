<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

//Foi importado o paginator
use Illuminate\Pagination\Paginator;
 
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
        // Foi definido useBootstrap 
       Paginator::useBootstrap();
    }
}
