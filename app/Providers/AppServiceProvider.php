<?php

namespace App\Providers;

use App\Http\View\Composers\AuthenticatedComposer;
use App\Http\View\Composers\CompaniesComposer;
use App\Http\View\Composers\LanguagesComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::composer('*', AuthenticatedComposer::class);
        View::composer('*', CompaniesComposer::class);
        View::composer('*', LanguagesComposer::class);
    }
}
