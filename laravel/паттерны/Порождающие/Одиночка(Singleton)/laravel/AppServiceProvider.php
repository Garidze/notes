<?php

namespace App\Providers;

use App\Services\Singleton\TestSingleton;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\Facades\Vite;
use Illuminate\Contracts\Foundation\Application;

class AppServiceProvider extends ServiceProvider
{
    public $singletons = [
        TestSingleton::class => TestSingleton::class,
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
//        $this->app->singleton(TestSingleton::class, function (Application $app) {
//            return new TestSingleton();
//        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
//        Vite::prefetch(concurrency: 3);
    }

    public $bindings = [
        //
    ];

}
