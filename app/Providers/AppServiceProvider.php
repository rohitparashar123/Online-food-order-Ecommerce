<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\MenuItem;


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
        $menuItem = MenuItem::where('status','Enabled')->get();
        view()->share('menuItem',$menuItem);
    }
}

