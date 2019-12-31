<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;

use Closure;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Check user is in specified group here
        if ($request->user()->is_admin) {
            return $next($request);
        }

        // Display a 403 Forbidden error
        abort(403, 'No Access');
    }
}
