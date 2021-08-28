<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class ShopAddressMigrationProvider
 * @package App\Providers
 */
class ShopAddressMigrationProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
    }
}
