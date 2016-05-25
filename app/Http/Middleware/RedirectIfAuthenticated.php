<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{

    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {   	
	        	
	        if (property_exists($this, 'redirectTo')) {
	            return redirect("$this->redirectTo");
	        }     	
        	    	
	       // return redirect('/Clientes');

        }

        return $next($request);
    }
}
