<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class level
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->level == 1){
            return $next($request);
        }else if(auth()->user()->level == 2){
            return $next($request);
        }
   
        return redirect('/')->with('Error',"You don't have admin access.");

        // return $next($request);
    }
}
