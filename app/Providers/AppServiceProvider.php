<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use App\Http\Responses\LogoutResponse;
use Illuminate\Support\ServiceProvider;
use Filament\Http\Responses\Auth\Contracts\LogoutResponse as LogoutResponseContract;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     * Source: https://laravel.com/docs/12.x/pagination#adjusting-the-pagination-link-window
     */
    public function boot(): void
    {
        Paginator::useBootstrapFour();
    }
}
