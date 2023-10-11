<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }
    public function handle( $request, Closure $next, $role)
{
    $user = $request->user();

    // Vérifiez si l'utilisateur a le rôle requis
    if ($user && $user->rule === $role) {
        return $next($request);
    }

    return redirect('/'); // Ou redirigez l'utilisateur vers une page d'erreur 403
}

}
