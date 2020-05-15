<?php

namespace usama165\facebook;

use Illuminate\Support\ServiceProvider;
use usama165\facebook\Library\Facebook;

class FacebookServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . "/routes.php");
        
        $this->loadViewsFrom(__DIR__.'/Views', 'used');
        $this->publishes([
            __DIR__.'/Views' => resource_path('views/vendor/used'),
        ]);
    }

    public function register()
    {
        
          
          
      

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */

}