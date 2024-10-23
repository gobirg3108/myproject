<?php

namespace App\Modules\ExampleModule;

use Illuminate\Support\ServiceProvider;

class ExampleModuleServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Merge module configuration
        $this->mergeConfigFrom(__DIR__.'/Config/config.php', 'examplemodule'); // Ensure this path is correct

        // Load routes and views
        $this->loadRoutesFrom(__DIR__.'/Routes/web.php');
        $this->loadViewsFrom(__DIR__.'/Resources/views', 'examplemodule');
    }

    public function boot()
    {
        // Load migrations
        $this->loadMigrationsFrom(__DIR__.'/Database/Migrations');
    }
}
