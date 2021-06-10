<?php

namespace App\Http\Middleware;

use Closure;
use OpenTracing\Tags;

class GlobalTracerMiddleware
{
    private $tracer;

    public function __construct()
    {
//        $this->tracer = app('tracer');
    }

    public function handle($request, Closure $next)
    {
//        $scope = $this->tracer->startActiveSpan('http');
//        $span = $scope->getSpan();
//        $span->log([
//            'event' => 'http_request received',
//            'level' => 'info'
//        ]);
//        $span->setTags([
//            Tags\HTTP_URL => $request->url(),
//            Tags\HTTP_METHOD => $request->method()
//        ]);
//        $span->finish();
//        $scope->close();

        return $next($request);
    }
}
