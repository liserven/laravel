<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/21
 * Time: 16:19
 */

namespace App\Validate;


class ActionValidate extends BaseValidate
{
    protected $rules = [
        'url'=> 'required',
        'name'=> 'required'
    ];

    protected $message = [
        'required'=> ':attribute 不能为空'
    ];

    protected $alias = [
        'url'=> '行为地址',
        'name'=> '行为名称'
    ];
}