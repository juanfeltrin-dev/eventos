<?php

namespace App\Http\Middleware;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }


    /**
     * Handle an unauthenticated user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  array  $guards
     * @return \Illuminate\Http\JsonResponse
     *
     */
    protected function unauthenticated($request, array $guards)
    {
        return response()->json(['error' => 'Unauthorized'], 401);
    }
}
