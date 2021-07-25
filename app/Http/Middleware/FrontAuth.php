<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class FrontAuth
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
         if($request->session()->has('FRONT_LOGIN')){
            
        }else{
            $request->session()->flash('do_login','Access Denied');
            return redirect('/login_page');
        }
        return $next($request);

    }
}
