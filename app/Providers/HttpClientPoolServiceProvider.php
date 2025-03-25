<?php

namespace App\Providers;

use App\Pools\HttpClientPool;
use Illuminate\Support\ServiceProvider;

class HttpClientPoolServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(HttpClientPool::class, function ($app) {
            return new HttpClientPool(
                config('services.http_client_pool.max_clients', 5)
            );
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
