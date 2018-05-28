<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/10
 * Time: 15:48
 */

namespace App\Http\Controllers\admin;

use App\Http\Model\MemberModel;
use Illuminate\Support\Facades\DB;

/**
 * Class MemberController
 * @package App\Http\Controllers\admin
 * 管理员控制器
 */
class MemberController extends BaseController
{


    //管理员列表
    public function toList()
    {
      $data = MemberModel::getPage();
      return view('admin.member.tolist', [
          'page'=> $data
      ]);
    }

    //创建管理员
    public function doAdd()
    {

    }


    //修改管理员
    public function doEdit()
    {

    }


    public function demo()
    {
        return '1';
    }

    public function dem1()
    {
        return 2;
    }

    public function dem2()
    {
        return 3;
    }


}