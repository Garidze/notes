<?php

namespace App\Providers;

use App\Http\Controllers\TestSecondController;
use App\Http\Controllers\TestThirdController;
use App\Services\Bind\BindFirst;
use App\Services\Bind\BindSecond;
use App\Services\Bind\IBind;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;
use Illuminate\Contracts\Foundation\Application;

class AppServiceProvider extends ServiceProvider
{
    public $singletons = [
        //TestSingleton::class => TestSingleton::class,
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->when(TestSecondController::class)->needs(IBind::class)->give(function () {
            return new BindFirst();
        });
        $this->app->when(TestThirdController::class)->needs(IBind::class)->give(function () {
            return new BindSecond();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
//        Vite::prefetch(concurrency: 3);
    }

    public $bindings = [
        //CurrencyFactory::class => ALPHACurrency::class,
        //CurrencyFactory::class => NBRBCurrency::class,
    ];

}
