<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminBasicAuth
{
    /**
     * Use HTTP Basic Auth on every admin request. Username optional; password comes from ADMIN_PASSWORD env.
     */
    public function handle(Request $request, Closure $next)
    {
        $password = env('ADMIN_PASSWORD', null);

        // If no admin password set, deny access.
        if (empty($password)) {
            return response('Admin access is disabled.', Response::HTTP_FORBIDDEN);
        }

        $user = $request->getUser();
        $pass = $request->getPassword();

        // Accept any username, check only password for simplicity
        if (!hash_equals((string)$password, (string)$pass)) {
            $headers = ['WWW-Authenticate' => 'Basic realm="Admin Area"'];
            return response('Authentication Required', Response::HTTP_UNAUTHORIZED, $headers);
        }

        return $next($request);
    }
}
