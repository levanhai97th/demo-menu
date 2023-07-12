<?php

namespace App\Providers;

use App\Repositories\Student\StudentRepository;
use App\Repositories\Student\StudentRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(
            StudentRepositoryInterface::class,
            StudentRepository::class
        );
    }
}
