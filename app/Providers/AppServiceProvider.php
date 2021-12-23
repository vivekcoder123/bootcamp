<?php

namespace App\Providers;

use App\Interfaces\StockMarketInterface;
use App\Services\StockMarketWebsite1;
use App\Services\StockMarketWebsite2;
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
        $this->app->singleton(StockMarketInterface::class, function ($app) {
            switch ($app->make('config')->get('constants.stockmarket')) {
                case 'website1':
                    return new StockMarketWebsite1;
                case 'website2':
                    return new StockMarketWebsite2;
                default:
                    throw new \RuntimeException("Unknown Stock Market Website");
            }
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
