<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    public function handle($request, Closure $next, $guard = null)
    {
        try{
            $user = Auth::payload();
        }catch(\Tymon\JWTAuth\Exceptions\TokenExpiredException $e){
            return response()->json(['token_expirado' => $e->getMessage()],500);
        }catch(\Tymon\JWTAuth\Exceptions\TokenInvalidException $e){
            return response()->json(['token_invalido' => $e->getMessage()],500);
        }catch(\Tymon\JWTAuth\Exceptions\JWTException $e){
            return response()->json(['token_ausente' => $e->getMessage()],500);
        }

        return $next($request);
    }
}
