<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/11
 * Time: 10:49
 */

namespace App\Http\Controllers\admin;


use App\Http\Model\ActionDataModel;
use App\Validate\ActionValidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActionController extends BaseController
{
    public function toList(Request $request)
    {
        $page = ActionDataModel::getPage();
        return view('admin.action.tolist', [ 'page'=> $page]);
    }

    public function doAdd(Request $request)
    {
        if($request->isMethod('post'))
        {
            (new ActionValidate())->goCheck();
            $model = new ActionDataModel();
            $model->ad_url = $request->url;
            $model->ad_name = $request->name;
            $model->ad_pid = $request->pid;
            if( $model->save())
            {
                return $this->resultHandler();
            }
            else{
                return $this->resultHandler('操作失败', false);
            }
        }else{
            $action = ActionDataModel::where([ 'ad_pid'=> 0])->get();
            return view('admin.action.doadd')->with('action', $action);
        }
    }

    public function doEdit()
    {
        $page = ActionDataModel::getPage();
        return view('admin.action.tolist', [ 'page'=> $page]);

    }

//公共的删除方法  如果不需要可在子类中继承重写
    public function doDel(Request $request)
    {
        $result = DB::table('action_data')->where(['ad_id'=> $request->id])->delete();
        return  $this->resultHandles($result);
    }

}