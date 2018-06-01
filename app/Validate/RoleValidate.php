<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/21
 * Time: 16:19
 */

namespace App\Validate;


class RoleValidate extends BaseValidate
{
    protected $rules = [
        'name'=> 'required',
        'message'=> 'required'
    ];

    protected $message = [
        'required'=> ':attribute 不能为空'
    ];

    protected $alias = [
        'name'=> '角色名称',
        'message'=> '角色描述'
    ];
}