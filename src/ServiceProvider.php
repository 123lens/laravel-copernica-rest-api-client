<?php
namespace Budgetlens\LaravelCopernicaApi;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/copernica.php' => config_path('copernica.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/copernica.php', 'copernica');

        // Register the main class to use with the facade
        $this->app->singleton(CopernicaApi::class, function () {
            return new CopernicaApi();
        });
    }
}
