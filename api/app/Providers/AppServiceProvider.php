<?php

namespace App\Providers;

use App\Repositories\MariaDB\JobRepository;
use App\Repositories\MariaDB\UserRepository;
use App\Services\Auth\LoginService;
use App\Services\Auth\RegisterService;
use App\Services\Jobs\ChartDataService;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(RegisterService::class, function (Application $app) {
            return new RegisterService($app->make(UserRepository::class));
        });

        $this->app->bind(LoginService::class, function (Application $app) {
            return new LoginService($app->make(UserRepository::class));
        });

        $this->app->bind(ChartDataService::class, function (Application $app) {
            return new ChartDataService($app->make(JobRepository::class));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
