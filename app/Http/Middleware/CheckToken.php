<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class CheckToken extends BaseMiddleware
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
        try {
            JWTAuth::parseToken()->authenticate();
        } catch (\Exception $e) {
            if($e instanceof TokenInvalidException) {
                return response()->json(['status' => 'Token is invalid']);
            }
            else if($e instanceof TokenExpiredException) {
                return response()->json(['status' => 'Token is expired']);
            }
            else {
                return response()->json(['status' => 'Authorization Token not found']);
            }
        }
        return $next($request);
    }
}
