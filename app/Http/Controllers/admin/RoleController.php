<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/11
 * Time: 10:48
 */

namespace App\Http\Controllers\admin;


use App\Http\Model\RoleDataModel;

class RoleController extends BaseController
{

    public function toList()
    {
        $page = RoleDataModel::all();
        return view('admin.role.tolist');
    }
}