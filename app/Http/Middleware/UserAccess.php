<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$userTypes): Response
    {
        if ($request->route()->getName() == 'auth.logout') {
            return $next($request);
        }
        
        // if(auth()->user()->aktor == $userType){
        //     return $next($request);
        // }

        if(in_array(auth()->user()->aktor, $userTypes)){
            return $next($request);
        }
          
        return response()->json(['You do not have permission to access for this page.']);
    }
}
