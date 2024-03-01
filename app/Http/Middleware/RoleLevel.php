<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // kalau user itu ada rolenya yang sesuai 
        if (in_array($request->user()->role, $roles)) {
            return  $next($request);
        }

        // ini kondisi dimana user tidak boleh melewati jalur itu
        return abort(403);
    }
}
