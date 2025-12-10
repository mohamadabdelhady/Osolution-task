<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiKeyAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $apiKey =$request->bearerToken();
        $validApiKey =config('app.api_key');
        if ($apiKey !==$validApiKey) {
            return response()->json(['message'=>'Unauthorized'],401);
        }
        return $next($request);
    }
}
