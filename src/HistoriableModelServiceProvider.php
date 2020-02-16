<?php

namespace Iferas93\HistoriableModel;

use Iferas93\Models\History;
use Illuminate\Support\ServiceProvider;

class HistoriableModelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'historiable-model');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'historiable-model');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/historiable.php' => config_path('historiable.php'),
            ], 'config');

            if (!class_exists("CreateHistoriesTable")) {
                $this->publishes([
                    __DIR__ . '/../src/migrations/create_histories_table.php.stub.php'
                    => database_path('migrations/' . date("Y_m_d_His", time()) . "_create_histories_table.php")
                ], 'migrations');

            }


            if (!class_exists("History")) {
                // Publishing the models.
                $this->publishes([
                    __DIR__ . '/../src/Models/History.php' => app_path('Models/History'),
                ], 'models');
            }


            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/historiable-model'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/historiable-model'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/historiable-model'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //$this->loadMigrationsFrom(__DIR__ . '/../src/migrations');

        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/historiable.php', 'historiable-model');

        // Register the main class to use with the facade
        $this->app->singleton('historiable-model', function () {
            return new History();
        });
    }
}
