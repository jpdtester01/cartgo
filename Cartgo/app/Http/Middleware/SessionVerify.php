<?php

namespace App\Http\Middleware;

use Closure;

class SessionVerify
{
    public function handle($request, Closure $next)
    {
        if(!$request->session()->has('id')){
            return redirect('/system/supportstaff/login');
        }else{
            return $next($request);
        }
    }
}
