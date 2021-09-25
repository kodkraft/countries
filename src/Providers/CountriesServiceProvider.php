<?php

namespace Kodkraft\Countries\Providers;

use Illuminate\Support\ServiceProvider;
use Kodkraft\Countries\Console\Commands\UpdateCommand;

class CountriesServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }


    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                                UpdateCommand::class,

                            ]);
        }

        $this->publishes([
                             __DIR__ . '/../config/countries.php' => config_path('countries.php'),
                         ],'kodkraft-config');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}
