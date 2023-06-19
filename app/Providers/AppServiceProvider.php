<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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
     */

     public function boot(): void
    {
        Validator::extend('time', function ($attribute, $value, $parameters, $validator) {
            // Use PHP's built-in strtotime function to validate the time format
            return strtotime($value) !== false;
        });
    }
}
