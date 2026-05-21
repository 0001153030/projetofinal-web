<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuth
{
    /**
     * Simple admin password session check. If not set, redirect to admin login.
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->session()->get('is_admin', false) === true) {
            return $next($request);
        }

        return redirect()->route('admin.login');
    }
}
