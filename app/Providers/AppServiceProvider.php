<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Jaeger\Config;
use OpenTracing\GlobalTracer;
use Log;
use const Jaeger\SAMPLER_TYPE_CONST;

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
//        $this->initTracer();
//        $this->app->instance('tracer', GlobalTracer::get());
    }
}
