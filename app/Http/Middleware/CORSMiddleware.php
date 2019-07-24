<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CORSMiddleware
{
    public function handle($request, Closure $next, $guard = null)
    {
        $headers = [
            'Access-Control-Allow-Oringin'      => '*',
            'Access-Control-Allow-Methods'      => 'POST, GET, OPTIONS, PUT, DELETE',
            'Access-Control-Allow-Credentials'  => 'true',
            'Access-Control-Max-Age'            => '86400',
            'Access-Control-Allow-Headers'      => 'Content-type, Authorization, X-Request-Width'
        ];

        if( $request->isMethod('OPTIONS') ){
            return $respose()->json( '{"method": "OPTIONS"}', 200, $headers);
        }

        $response = $next($request);

        foreach ($headers as $key => $header) {
            $response->header($key,$header);
        }

        return $response;
    }
}
