<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        View::composer('*', 'App\View\Composers\MenuComposer');
        View::composer('*', 'App\View\Composers\FakerComposer');
        View::composer('*', 'App\View\Composers\DarkModeComposer');
        View::composer('*', 'App\View\Composers\LoggedInUserComposer');
        View::composer('*', 'App\View\Composers\ColorSchemeComposer');
    }
}
