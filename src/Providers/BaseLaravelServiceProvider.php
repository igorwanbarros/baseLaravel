<?php

namespace Igorwanbarros\BaseLaravel\Providers;

use Illuminate\Support\ServiceProvider;

class BaseLaravelServiceProvider extends ServiceProvider
{

    protected $commands = [
        '\Laravelista\LumenVendorPublish\VendorPublishCommand'
    ];


    /**
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
    }


    /**
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../Migrations' => base_path('database/migrations/'),
        ]);

        $this->loadViewsFrom(__DIR__.'/views', 'softcomtecnologia');

        require_once(__DIR__ . '/../Http/routes.php');
    }
}
