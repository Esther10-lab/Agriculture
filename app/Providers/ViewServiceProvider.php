<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
{
    View::composer('*', function ($view) {
        $cartCount = collect(session('cart', []))->sum('quantity');
        $view->with('cartCount', $cartCount);
    });
}
}