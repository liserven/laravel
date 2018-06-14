<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/9
 * Time: 14:01
 */

namespace App\Http\Controllers\admin;


use Illuminate\Support\Facades\Cache;

class IndexController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        cache('aaa', 111);
        $actions = $this->getAction();
        return view('admin.index.index', [
            'menu'=> $actions
        ]);
    }

    public function welcome()
    {
        return view('admin.index.welcome');
    }
}