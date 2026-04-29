<?php

namespace App\Providers;

use Livewire\Livewire;
use Illuminate\Pagination\Paginator;
use App\Http\Responses\LogoutResponse;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
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

        // set Liveware update route to web
        // !! THIS FIXES THE HORRIBLE LOGIN FREEZING BUG !!
        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/livewire/update', $handle)->middleware('web');
        });
    }
}
