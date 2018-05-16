<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/16
 * Time: 14:49
 */
namespace app\Helpes;


function show( $msg= '操作成功', $bool= false, $data= [], $code= 200)
{
    $data = [
        'bol'=> $bool,
        'msg'=> $msg,
        'data'=> $data,
        'err_code'=> $code
    ];
    return json_encode($data);
}