<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AddXsrfTokenCookie
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if ($request->hasSession()) {
            $token = $request->session()->token();
        }
        $response = $next($request);

        // Only add the cookie if the session is active and response is appropriate
        if (
            $request->hasSession() &&
            ($response instanceof \Illuminate\Http\Response || $response instanceof \Illuminate\Http\JsonResponse)
        ) {
            $response->headers->setCookie(
                cookie(
                    'XSRF-TOKEN',
                    $request->session()->token(),
                    0,                      // Expires with browser session
                    '/',
                    null,
                    config('session.secure'),
                    true,                   // HttpOnly
                    false,                  // Raw
                    'lax'                   // SameSite
                )
            );
        }

        return $response;
    }
}
