<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerificarRol
{
    public function handle($request, Closure $next, ...$roles)
    {
        if (in_array(auth()->user()->rol, $roles)) {
            return $next($request);
        }

        return redirect('/login');
    }
}
