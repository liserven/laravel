<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/6/12
 * Time: 17:15
 */

namespace App\Http\Controllers\gang;

use App\Http\Controllers\admin\BaseController;
use Illuminate\Http\Request;

class LoginController extends BaseController
{


    public function index(){
        return view('gang.login.index');
    }

    public function login(Request $request)
    {

        //管理员登录 操作
        /**
         * 首先查看管理员的管理的工会所有的id, 让他选择一个操作。
         *
         *
         */
        $phone = $request->phone;
        $password = $request->password;
        session(['gangs_id'=> [1,2]]);
        return $this->resultHandler('ok', true, ['aaa'=> session('gangs_id')]);
    }
}