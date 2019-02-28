<?php

namespace App\Http\Middleware;

use Closure;

class user_permission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $check = session('user_name','');
        if($check=='')
        {
            return redirect('/user/login');
        }
        else{
            return $next($request);
        }

    }
}
