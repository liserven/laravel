<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/14
 * Time: 15:15
 */

namespace App\Http\Service;


use App\Http\Model\UserDataModel;
use Illuminate\Http\Request;

class LoginService
{

    protected $input;

    protected $user_model; //用户模型

    public function __construct(Request $request)
    {
        $this->input = $request;

        $this->user_model = new UserDataModel();
    }


    //登录验证
    public function userLogin()
    {}

}