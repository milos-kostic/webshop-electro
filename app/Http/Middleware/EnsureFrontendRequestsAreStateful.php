<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureFrontendRequestsAreStateful
{
    /**
     * Handle an incoming request.
     *
     * This middleware checks if the request comes from a frontend client
     * by validating the request origin or headers.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Example simple check: only allow requests with Accept header containing 'application/json'
        if (! $request->expectsJson()) {
            abort(403, 'Forbidden - This route accepts only JSON requests.');
        }

        return $next($request);
    }
}
