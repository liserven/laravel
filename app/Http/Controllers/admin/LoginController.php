<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/10
 * Time: 10:24
 */

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;

class LoginController extends Controller
{


    public function index()
    {
        return view('admin.login.index');
    }
}