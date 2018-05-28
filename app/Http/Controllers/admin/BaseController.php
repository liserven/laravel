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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    protected function resultHandles($result, $errCode = 90004)
    {
        if( $result ){
            return $this->resultHandler();
        }
        else{
            return $this->resultHandler('操作失败', false);
        }
    }
    protected function resultHandler( $msg= '操作成功', $bool= true, $data= [], $code= 200)
    {
        $data = [
            'bol'=> $bool,
            'msg'=> $msg,
            'data'=> $data,
            'err_code'=> $code
        ];
        return response()->json($data);
    }





}