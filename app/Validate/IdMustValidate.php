<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/21
 * Time: 19:12
 */

namespace App\Validate;


class IdMustValidate extends BaseValidate
{
    protected $rules = [
        'id'=> 'required|integer',
    ];

    protected $message = [
        'required'=> ':attribute 不能为空',
        'integer'=> ':attribute 必须是整数'
    ];
}