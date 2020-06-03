<?php

namespace Iferas93\HistoriableModel;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class HistoriableModelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/historiable.php' => config_path('historiable.php'),
            ], 'config');

            if (!class_exists('CreateHistoriesTable')) {
                $this->publishes([
                    __DIR__ . '/../src/migrations/create_histories_table.php.stub.php' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_histories_table.php'),
                ], 'migrations');
            }

            /* if (!class_exists("History")) {
                 // Publishing the models.
                 $this->publishes([
                     __DIR__ . '/../src/Models/History.php' => app_path('Models/History.php'),
                 ], 'models');
             }*/
        }

        $this->loadRoutesFrom(__DIR__ . '../../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'historiable');
        Paginator::useTailwind();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/historiable.php', 'historiable');

        // Register the main class to use with the facade
        $this->app->bind('historiable', function () {
            return new History();
        });
    }
}
