<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $cookieControl = Cookie::get('language');
        if (is_null($cookieControl) || $cookieControl == "") {
            Cookie::queue('language', 'tr', 525600);
            App::setLocale('tr');
        } else {
            Cookie::queue('lang', $cookieControl, 525600);
            App::setLocale($cookieControl);
        }
        return $next($request);
    }
}
