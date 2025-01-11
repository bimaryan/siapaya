<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use hisorange\BrowserDetect\Parser as Browser;

class MultiGuard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $guards): Response
    {
        $guards = is_string($guards) ? explode(',', $guards) : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                Auth::shouldUse($guard);
                return $next($request);
            }

            if (auth()->check()) {
                auth()->user()->update([
                    'browser' => Browser::browserName() . ' ' . Browser::browserVersion(),
                    'device' => Browser::deviceType(),
                ]);
            }
        }

        return redirect()->route('masuk.index');
    }
}
