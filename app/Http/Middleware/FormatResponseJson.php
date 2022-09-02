<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Log;
use Closure;

class FormatResponseJson
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
        $response = $next($request);

        if ($request->isApi && method_exists($response,'getData')) {
            $responseData = $response->getData();
            if ($responseData->meta && $responseData->meta->code) {
              $response->setStatusCode($response->getData()->meta->code);
            }
        }
        Log::channel("api")->info([
            'endpoint' => url()->full(),
            'payloads' => json_encode($request->all()),
            'response' => json_encode($response),
        ]);

        return $response;
    }
}
