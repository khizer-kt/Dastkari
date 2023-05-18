<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {   
        //this global msg will be printed in all pages whether the condition is satisfied on it or not
        echo "global msg for all pages";
        //THE CHECK::if user age is less than 18 he should go to noaccess page
        if ($request->age && ($request->age)<18)
        {
            return redirect("NO");
        }

        return $next($request);

        //FOR MIDDLEWARE WE NEED TO ADD THIS MIDDLEWARE IN kernel.php FILE TOO

    }
}
