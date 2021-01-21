<?php

namespace Jdenoc\MakeTrait;

use Illuminate\Support\ServiceProvider;

class MakeTraitServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     */
    public function boot(){
        if ($this->app->runningInConsole()) {
            // Registering package commands.
             $this->commands([
                 MakeTraitCommand::class
             ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register(){
        //
    }
}
