<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {

        // usar $this->middleware('role:admin');
        // o en blade Auth::user()->isRole('admin')

        if (Auth::check()) {

            // User model isRole()
            if( Auth::user()->isRole($role) ){
                return $next($request);
            }

        }

        return abort(403);
    }
}
