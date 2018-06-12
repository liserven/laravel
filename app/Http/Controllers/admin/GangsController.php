<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/11
 * Time: 10:48
 */

namespace App\Http\Controllers\admin;


use App\Http\Model\ActionDataModel;
use App\Http\Model\RoleActionModel;
use App\Http\Model\RoleDataModel;
use App\Validate\RoleValidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class GangsController extends BaseController
{



    public function toList()
    {
        $page = RoleDataModel::getPage();
        return view('admin.role.tolist')->with('page', $page);
    }

    public function doAdd(Request $request)
    {
    }
    public function editOrder(Request $request)
    {
        $data = ActionDataModel::find($request->id);
        $data->order= $request->order;
        return $this->resultHandles($data->save());
    }
    public function doDel(Request $request)
    {

        $result = DB::table('role_data')->where(['rd_id'=> $request->id])->delete();
        return  $this->resultHandles($result);
    }
    public function editStatus(Request $request)
    {
        $data = ActionDataModel::find($request->id);
        $data->status = $request->state;
        return $this->resultHandles($data->save());
    }

}