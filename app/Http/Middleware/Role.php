<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $rolesParam)
    {
        $roles = explode(',', $rolesParam);
        foreach ($roles as $role) {
            if (Auth::guard($role)->user()) {
                return $next($request);
            }
        }

        return redirect()->route('guest.home');
    }
}
