<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckouthML
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (request()->session()->has('mercadolibre_access_token')) {
            return $next($request);
        }
        
        return redirect()->route('welcome');
    }
}
