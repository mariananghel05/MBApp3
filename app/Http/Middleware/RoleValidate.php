<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use \App\Models\Role;
use Illuminate\Support\Facades\Auth;

class RoleValidate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (ctype_digit($role)) {
            if($role <= Auth::user()->role_id){
                return redirect(url()->previous());
            }
        } else {
            if($role != Role::find(Auth::user()->role_id)->name){
                return redirect('/dashboard');
            }
        }


        return $next($request);
    }
}
