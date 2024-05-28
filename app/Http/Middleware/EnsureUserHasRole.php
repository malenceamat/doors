<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EnsureUserHasRole
{
    /**
     * Checks that the user has a role with the passed name
     */
    public function handle($request, Closure $next, $role_name)
    {
        if(Auth::check()){
            $userRole = $request->user()->role;
            if ($userRole != $role_name) {
                if($userRole == 'admin'){
                    return $next($request);
                }
                return redirect('/');
            }
        } else
            return redirect('/');


        return $next($request);
    }
}
