<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class Localization
{
    public function handle($request, Closure $next)
    {
        // Get locale from session or use default
        $locale = Session::get('locale', config('app.locale'));

        // Ensure it is set in Laravel
        App::setLocale($locale);

        // Persist locale in session if missing
        if (!Session::has('locale')) {
            Session::put('locale', $locale);
            Session::save(); // ✅ Ensure it is stored
        }

        return $next($request);
    }
}
