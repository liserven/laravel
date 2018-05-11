<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/10
 * Time: 10:04
 */

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Http\Model\ActionDataModel;
use Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\View;

class BaseController extends Controller
{


    public function __construct()
    {

    }




    protected function getAction()
    {
        $actions = ActionDataModel::where(['ad_pid'=>0])->get();
        foreach ($actions as $action)
        {
            $action['data'] = ActionDataModel::where(['ad_pid'=>$action['ad_id']])->get();
        }
        return $actions;
    }


}