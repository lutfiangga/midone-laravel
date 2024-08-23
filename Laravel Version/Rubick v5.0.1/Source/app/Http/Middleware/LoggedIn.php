<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

class LoggedIn
{
    /**
     * Redirect user if they are authenticated.
     */
    public function handle(Request $request, Closure $next): Response|JsonResponse|RedirectResponse
    {
        if (!is_null(request()->user())) {
            return redirect('/');
        } else {
            return $next($request);
        }
    }
}
