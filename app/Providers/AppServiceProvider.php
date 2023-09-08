<?php

namespace App\Providers;

use App\Repositories\CityRepository;
use App\Repositories\DatabaseCityRepository;
use App\Repositories\DatabaseProvinceRepository;
use App\Repositories\ProvinceRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ProvinceRepository::class, DatabaseProvinceRepository::class);
        $this->app->bind(CityRepository::class, DatabaseCityRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
