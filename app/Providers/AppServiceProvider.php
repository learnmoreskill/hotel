<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use App\SiteSetting;
use App\Menu;

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
        Schema::defaultStringLength(191);

        View::composer(['admin.*', 'frontend.*'], function ($view) {

            $view->with('site_setting', SiteSetting::first());
        });

        View::composer(['frontend.*'], function ($view) {
            $menu = Menu::take(6)->orderBy('order_no')->get();
            $view->with('menu_bar',$menu);
        });
    }
}