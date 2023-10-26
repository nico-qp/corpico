<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, $rol, $rol2)
    {
        if (auth()->check() && auth()->user()->id_rol == $rol) {
            return $next($request);
        }
        if (auth()->check() && auth()->user()->id_rol == $rol2) {
            return $next($request);
        }
        return redirect('/'); // Redirige a la página de inicio o a una página de acceso denegado.
    }

}
