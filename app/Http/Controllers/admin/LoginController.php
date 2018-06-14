<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/10
 * Time: 10:24
 */

namespace App\Http\Controllers\admin;


use App\Http\Model\MemberModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class LoginController extends BaseController
{


    public function index()
    {
        return view('admin.login.index');
    }

    public function login(Request $request)
    {
        $phone = $request->phone;
        $password = $request->password;
        if( !$phone || !$password )
        {
            return $this->resultHandler('帐号密码不能为空', false);
        }
        $memberData = MemberModel::where([ 'md_phone'=> $phone])->first();
        if( !$memberData )
        {
            return $this->resultHandler('该管理员不存在', false);
        }
        if( $memberData['md_password'] != md5($password) )
        {
            return $this->resultHandler('密码错误', false);
        }
        cache([ 'memberData'=> $memberData], 3600*12);
        return $this->resultHandler('登陆成功', true);
    }


    public function exit()
    {
        if( Cache::forget('memberData') )
        {
            return $this->resultHandler('退出成功', true);
        }else{
            return $this->resultHandler('退出失败', false);
        }
    }
}