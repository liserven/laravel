<?php
/**
 * Created by PhpStorm.
 * User: lishenyang
 * Date: 2018/6/7
 * Time: 13:11
 */

namespace App\Validate;


class MemberValidate extends BaseValidate
{
    protected $rules = [
        'phone'=> 'required',
        'password'=> 'required',
        'name' => 'required',
    ];

    protected $message = [
        'required'=> ':attribute 不能为空'
    ];

    protected $alias = [
        'name'=> '管理员名称',
        'phone'=> '管理员手机',
        'password'=> '管理员密码',
    ];
}