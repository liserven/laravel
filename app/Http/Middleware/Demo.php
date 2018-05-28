<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/21
 * Time: 13:46
 */

namespace App\Http\Middleware;


use Closure;
class Demo
{
    public function handle( $request , Closure $next)
    {
        if( time() > strtotime("2018-05-02") ){
            dd($request->a);
        }
        return $next($request);
    }
}