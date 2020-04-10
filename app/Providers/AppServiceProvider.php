<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use App\Macro\StrMacro;

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
        Str::macro('partNumber',function($number){
            return 'AB-'.substr($number, 0,3).'-'.substr($number, 3);
        });


        Str::mixin(new StrMacro());

    }
}
