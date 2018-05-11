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
use Illuminate\Http\Request;

class ActionController extends BaseController
{
    public function toList()
    {
        $page = ActionDataModel::getPage();
        return view('admin.action.tolist', [ 'page'=> $page]);
    }

    public function doAdd(Request $request)
    {
        if($request->isMethod('post'))
        {
            throw new ActionException();
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
}