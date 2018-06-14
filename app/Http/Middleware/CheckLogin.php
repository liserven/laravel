<?php

namespace App\Http\Middleware;

use Closure;

class CheckLogin
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
        if( !cache('memberData') )
        {
            return redirect('/admin/login/index')->with('is_login', 2);
        }
        return $next($request);
    }
}
