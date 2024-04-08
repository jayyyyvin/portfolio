<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation;

class RoleChecker
{
    public function handle(Request $request, Closure $next, $role)
    {
        if(!$request->user() || $request->user()->role !== $role)
        {
            abort(403, 'Unauthorized action is not allowed');
        }

        return $next($request);
    }
}