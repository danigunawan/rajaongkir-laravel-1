<?php

namespace Ncaneldiee\Rajaongkir\Laravel;

use Ncaneldiee\Rajaongkir;
use Illuminate\Support\ServiceProvider;

class RajaongkirServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/rajaongkir.php' => config_path() . '/rajaongkir.php',
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('rajaongkir.domestic', function() {
            return new Rajaongkir\Domestic(config('rajaongkir.api_key'), config('rajaongkir.account_type'));
        });

        $this->app->alias('rajaongkir.domestic', Rajaongkir\Domestic::class);

        $this->app->singleton('rajaongkir.international', function() {
            return new Rajaongkir\International(config('rajaongkir.api_key'), config('rajaongkir.account_type'));
        });

        $this->app->alias('rajaongkir.international', Rajaongkir\International::class);

        $this->app->tag(['rajaongkir.domestic', 'rajaongkir.international'], 'rajaongkir');
    }
}
