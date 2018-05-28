<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/21
 * Time: 19:20
 */

namespace App\Http\Middleware;

use App\Exceptions\IdMustException;
use Closure;
class IdMust
{
    public function handle( $request , Closure $next)
    {
        throw_if( !$request->id , new IdMustException());
        return $next($request);
    }
}