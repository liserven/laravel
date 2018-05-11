<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/11
 * Time: 16:13
 */

namespace App\Exceptions;


class ActionException extends BaseException
{
    public $code = 200;
    public $bol = false;
    public $msg = '用户信息找不到';
    public $error_code = 999;
}