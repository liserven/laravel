<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/10
 * Time: 10:04
 */

namespace App\Http\Controllers\admin;


use App\Exceptions\ParameterException;
use App\Http\Controllers\Controller;
use App\Http\Model\ActionDataModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    //只有在工会管理登录才有用。 其他时候不用这个变量
    protected $gangId;

    //构造方法
    public function __construct()
    {

        $this->gangId = session('gangsId');
        $this->checkStaticFile();
        $this->beForeAction();
    }

    public function beForeAction()
    {
            //前置操作， 可在子类中继承重写
    }


    //检测静态文件是否存在
    private function checkStaticFile()
    {
        $actionName = explode('\\', \Route::current()->getActionName());
        $mName = $actionName[3]; //模块名称
        $temp = explode('@', $actionName[4]);
        $cName = strtolower(str_replace('Controller', '', $temp[0]));
        $aName = strtolower($temp[1]);
        if( !\request()->ajax() )
        {
            $mDir = public_path()."/js/$mName";
            if( !is_dir($mDir))
            {
                mkdir($mDir, 0777, true);
            }
            $cDir = public_path()."/js/$mName/$cName";
            if( !is_dir($cDir))
            {
                mkdir($cDir, 0777, true);
            }
            $fileDir = public_path()."/js/$mName/$cName/$aName.js";
            if( !file_exists($fileDir) )
            {
                //如果当前静态文件不存在
                $html = "
/**
*   创建者:李沈阳
*   创建时间:".date('Y-m-d H:i:s')."
**/                
            \nlayui.define(['form', 'layer','laydate','upload'], function (exports) { \n
            \n
            //逻辑代码写在这里
});";
                file_put_contents($fileDir, $html);
            }
        }

        View::share('action_name', [ 'mName'=> $mName, 'cName'=> $cName, 'aName'=> $aName] );
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


    //统一的返回前台的方法
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

    public function checkGangId()
    {
        if( !$this->gangId )
        {
            throw new ParameterException([
                'msg'=> '协会参数意外丢失，操作终止'
            ]);
        }
    }




}