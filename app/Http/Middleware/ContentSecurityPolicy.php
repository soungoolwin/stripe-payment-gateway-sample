<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ContentSecurityPolicy
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $nonce = base64_encode(random_bytes(16)); // Generate a random nonce

        // Add the nonce to the request so it can be accessed in the view
        $request->attributes->set('cspNonce', $nonce);

        $response = $next($request);

        // Set the CSP header with the nonce
        $response->headers->set('Content-Security-Policy', "script-src 'self' https://js.stripe.com 'nonce-{$nonce}';");

        return $response;
    }
}
