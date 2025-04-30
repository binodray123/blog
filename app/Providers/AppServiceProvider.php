<?php

namespace App\Providers;

use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\ServiceProvider;
use App\Auth\Middleware\Authenticate;
use App\Http\Middleware\Authenticate as HttpMiddlewareAuthenticate;
use Illuminate\Auth\Middleware\Authenticate as MiddlewareAuthenticate;
use Illuminate\Support\Facades\Session;

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
        // Redirect as Authenticated User to dashboard
        
    }
}
