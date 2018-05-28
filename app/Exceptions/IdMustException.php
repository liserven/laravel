<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/21
 * Time: 19:22
 */

namespace App\Exceptions;


class IdMustException extends BaseException
{
    public $code = 200;
    public $bol = false;
    public $msg = 'Id参数错误';
    public $error_code = 999;
}