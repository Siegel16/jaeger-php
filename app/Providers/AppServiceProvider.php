<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Jaeger\Config;
use OpenTracing\GlobalTracer;
use OpenTracing\Formats;
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
        $this->initTracer();
        $this->app->instance('tracer', GlobalTracer::get());
//        DB::listen(function ($query) {
//            dd($this->app);
//        });
    }

    private function initTracer()
    {
        try {
            $config = new Config(
                [
                    'sampler' => [
                        'type' => SAMPLER_TYPE_CONST,
                        'param' => true,
                    ],
                    'logging' => true,
                    'dispatch_mode' => Config::JAEGER_OVER_BINARY_UDP,
                ],
                'jaeger_php'
            );
            $config->initializeTracer();
        } catch (\Exception $e) {
            Log::info('Failed', ['msg:' => $e->getMessage()]);
        }
    }
}
