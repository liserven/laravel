<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/11
 * Time: 15:52
 */

namespace App\Exceptions;

use Exception;

class BaseException extends Exception
{
    public $code = 400;
    public $bol = false;
    public $msg = 'invalid parameters';
    public $error_code = 999;

    public $shouldToClient = true;

    /**
     * 构造函数，接收一个关联数组
     * @param array $params 关联数组只应包含code、msg和errorCode，且不应该是空值
     */
    public function __construct($params=[])
    {
        if(!is_array($params)){
            return;
        }
        if(array_key_exists('bol',$params)){
            $this->code = $params['bol'];
        }
        if(array_key_exists('code',$params)){
            $this->code = $params['code'];
        }
        if(array_key_exists('msg',$params)){
            $this->msg = $params['msg'];
        }
        if(array_key_exists('error_code',$params)){
            $this->error_code = $params['error_code'];
        }
    }
}