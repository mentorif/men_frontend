<?php

namespace App\Http\Middleware;

use Closure;
use Jenssegers\Agent\Agent as Agent;

class BeforeHttp
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // before a http request start
        $this->detectDevice($request);

        // after the execution
        return $this->addResponseHeader($request, $next($request));

    }

    protected function detectDevice($request) {

        $agent = new Agent();
        $device = $agent->isMobile() ? 'MOB' : 'WEB';
        if($device == 'MOB') {
            config(['env.IS_MOBILE_DEVICE' => true, 'env.PLATFORM' => $device]);
        } else {
            config(['env.IS_MOBILE_DEVICE' => false, 'env.PLATFORM' => 'WEB']);
        }
    }

    protected function addResponseHeader($request, $response) {

        $response->header("Access-Control-Allow-Origin", env('APP_URL'));
        $response->header("Access-Control-Allow-Methods","GET, POST, OPTIONS");
        $response->header('Access-Control-Allow-Headers', 'Origin, Content-Type, Accept, Authorization, X-Request-With');
        $response->header('Access-Control-Allow-Credentials', 'true');

        return $response;
    }
}
