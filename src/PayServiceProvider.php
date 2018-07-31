<?php

namespace Tavey\Pay;

use Illuminate\Support\ServiceProvider;

class PayServiceProvider extends ServiceProvider
{
    protected $defer = true;
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/pay.php' => config_path('pay.php')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // 单例绑定服务
        $this->app->singleton('paytest', function ($app) {
            return new PayManager($app['config']);
        });
    }

    public function provides()
    {
        return ['paytest'];
    }
}
