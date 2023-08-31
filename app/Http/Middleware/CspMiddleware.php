<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CspMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        $csp = "default-src 'self' ; script-src 'self' https://cdn.ckeditor.com/ https://cdn.datatables.net/ https://code.jquery.com/ https://cdn.jsdelivr.net/ 'sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==' 'sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9' 'sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r' 'sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N' 'sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS' 'nonce-YXN1YmFuZ2V0MTIzNGhmaGZoZmpzb3ht' ; style-src 'self' https://cdn.ckeditor.com/ https://cdn.datatables.net/ https://cdn.jsdelivr.net/ https://cdnjs.cloudflare.com/ https://fonts.googleapis.com/ 'unsafe-inline' ; img-src 'self'  data: ; font-src 'self' https://fonts.gstatic.com/ https://cdnjs.cloudflare.com/ https://fonts.googleapis.com/; connect-src  'self' 'nonce-YXN1YmFuZ2V0MTIzNGhmaGZoZmpzb3ht' blob: ; frame-src 'self' https://www.google.com/ 'nonce-YXN1YmFuZ2V0MTIzNGhmaGZoZmpzb3ht' ; worker-src 'self'; object-src 'self' 'nonce-YXN1YmFuZ2V0MTIzNGhmaGZoZmpzb3ht'";
        $response->headers->set('Content-Security-Policy', $csp);
        return $response;

    }
}
