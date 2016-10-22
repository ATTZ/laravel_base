<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Request;

class IpAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        //in_array(Request::getClientIp(), ['127.0.0.1'])
        if(!(in_array(Request::ip(),['::1']))){
            return response('', 200);
        }

        return $next($request);
    }
}
