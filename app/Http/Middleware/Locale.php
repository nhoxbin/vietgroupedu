<?php

namespace App\Http\Middleware;

use App;
use Closure;

class Locale
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
        if (!session('locale')) {
            session(['locale' => config('app.locale')]);
        }
        App::setLocale(session('locale'));
        return $next($request);
    }
}
