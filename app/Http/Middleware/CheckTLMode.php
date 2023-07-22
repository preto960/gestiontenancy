<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckTLMode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        /* dd($request->header('User-Agent')); */
        /* if (strpos($userAgent, 'Postman') !== false) {
            // La consulta se realizó desde Postman
            // Realiza alguna acción específica si lo deseas
        } else {
            // La consulta no proviene de Postman
            // Puedes manejarla de acuerdo a tus necesidades
        } */
        config(['database.default' => \Spatie\Multitenancy\Models\Tenant::checkCurrent() ? 'tenant' : 'landlord']);
        \Artisan::call('config:clear');
        \Artisan::call('cache:clear');
        return $next($request);
    }
}
