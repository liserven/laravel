<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/11
 * Time: 10:49
 */

namespace App\Http\Controllers\admin;


use App\Exceptions\ActionException;
use App\Http\Model\ActionDataModel;
use App\Validate\ActionValidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class ActionController extends BaseController
{

    //自定义前置操作
    public function beForeAction()
    {
        View::share('action',ActionDataModel::where([ 'ad_pid'=> 0 ])->get());
        parent::beForeAction();
    }

    public function toList()
    {
        $page = ActionDataModel::getPage();
        return view('admin.action.tolist', [ 'page'=> $page]);
    }

    public function doAdd(Request $request)
    {
        if($request->isMethod('post'))
        {
            (new ActionValidate())->goCheck();
            if( is_null($request->id) ){

                //如果id不存在的话。就是添加
                $model = new ActionDataModel();
                $model->ad_url = $request->url;
                $model->ad_name = $request->name;
                $model->ad_pid = $request->pid;
                $model->created_at = time();
                $result = $model->save();
            }else {
                $model = $action = ActionDataModel::find($request->id);
                $model->ad_url = $request->url;
                $model->ad_name = $request->name;
                $model->ad_pid = $request->pid;
                $model->updated_at = time();
                $result = $model->save();
            }
            if( $result )
            {
                return $this->resultHandler();
            }
            else{
                return $this->resultHandler('操作失败', false);
            }
        }else{
            if( is_null($request->id) )
            {
                $data = [];
            }else{
                $data = $action = ActionDataModel::where([ 'ad_id'=> $request->id ])->first();
            }
            return view('admin.action.doadd')->with('data', $data);
        }
    }
    public function editOrder(Request $request)
    {
        $data = ActionDataModel::find($request->id);
        $data->order= $request->order;
        return $this->resultHandles($data->save());
    }
    public function doDel(Request $request)
    {
        $result = DB::table('action_data')->where(['ad_id'=> $request->id])->delete();
        return  $this->resultHandles($result);
    }
    public function editStatus(Request $request)
    {
        $data = ActionDataModel::find($request->id);
        $data->status = $request->state;
        return $this->resultHandles($data->save());
    }


}