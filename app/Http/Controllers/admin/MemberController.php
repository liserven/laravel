<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/10
 * Time: 15:48
 */

namespace App\Http\Controllers\admin;

use App\Http\Model\MemberLogModel;
use App\Http\Model\MemberModel;
use App\Http\Model\MemberRoleModel;
use App\Validate\MemberValidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\http\model\RoleDataModel;

/**
 * Class MemberController
 * @package App\Http\Controllers\admin
 * 管理员控制器
 */
class MemberController extends BaseController
{


    //管理员列表
    public function toList(Request $request)
    {
        $where = [];
        $phone = $request->phone;
        if( $phone )
        {
            $where['md_phone'] = $phone;
        }
        $data = MemberModel::getPage($where);
        foreach ( $data as $key=> &$member)
        {
            $member['roles'] = DB::table('member_role as mr')->where( [ 'member_id'=> $member->id])
                ->leftJoin('role_data as rd', 'rd.rd_id', '=', 'mr.role_id')
                ->select('rd_name')->get();
        }
        return view('admin.member.tolist', [
            'page' => $data
        ]);
    }

    //创建管理员
    public function doAdd(Request $request)
    {
        $roleData = RoleDataModel::getPage();

        if ($request->isMethod('post')) {
            //验证提交数据
            $roleArr = $request->role;
            //新增的话需要给新的管理员一个身份。。。 赋于他一个身份的权限后才能生效
            if (empty($roleArr)) {
                //如果没有选择银银角色， 不能添加 必须有一个角色
                return $this->resultHandler('必须分配一个角色给该管理员...', false);
            }

            DB::beginTransaction();
            try {
                if ($request->id) {
                    //如果id存在是修改 否则就是新增
                    $memberCheckData = MemberModel::find($request->id);
                    if (!$memberCheckData) {
                        return $this->resultHandler('该管理已经不存在了...', false);
                    }
                    $memberCheckData->md_name = $request->name;
                    $memberCheckData->email = $request->email;
                    $memberCheckData->order = $request->order;
                    $memberCheckData->status = $request->status;
                    $memberCheckData->is_super = $request->super;
                    $memberCheckData->updated_at = time();
                    $memberCheckData->save();

                    $memberInsertPrimaryKey = $memberCheckData->id;
                    DB::table('member_role')->where([ 'member_id'=> $memberInsertPrimaryKey])->delete();
                    MemberLogModel::addMemberLog(1, '1111', '0.0.0.0');
                } else {
                    //新增
                    (new MemberValidate())->goCheck();
                    $memberCheckData = MemberModel::where(['md_phone' => $request->phone])->first();
                    if ($memberCheckData) {
                        return $this->resultHandler('手机号已经存在...', false);
                    }
                    //添加管理员信息，获取新增数据主键
                    $memberInsertPrimaryKey = DB::table('member_data')->insertGetId([
                        'md_phone' => $request->phone,
                        'md_password' => md5($request->password),
                        'md_name' => $request->name,
                        'order' => $request->order,
                        'status' => $request->status,
                        'created_at' => time(),
                        'updated_at' => time(),
                        'email' => $request->email,
                        'is_super' => $request->super,
                    ]);
                    MemberLogModel::addMemberLog(1, '1111', '0.0.0.0');

                }

                //添加角色
                $memberRoleData = [];
                foreach ($roleArr as $key => $role) {
                    $memberRoleData[$key]['member_id'] = $memberInsertPrimaryKey;
                    $memberRoleData[$key]['role_id'] = $role;
                }
                DB::table('member_role')->insert($memberRoleData);
                DB::commit();
                return $this->resultHandler();
            } catch (\Exception $exception) {
                DB::rollBack();
                return $this->resultHandler($exception->getMessage(), false);
            }
        } else {
            if( $request->id )
            {
                //如果id存在为修改页面
                $data = MemberModel::find($request->id);
                $MemberRoleData = DB::table('member_role as mr')->where( [ 'member_id'=> $request->id])
                    ->leftJoin('role_data as rd', 'rd.rd_id', '=', 'mr.role_id')
                    ->get();
                $roleIds = array_column($MemberRoleData->toArray(), 'rd_id');
                return view('admin.member.doadd', [
                    'data'=> $data,
                    'role_ids'=> $roleIds,
                    'role_data'=> $roleData
                ]);
            }
            else{
                //如果不存在为新增页面
                return view('admin.member.doadd', [
                    'data'=> [],
                    'role_data'=> $roleData,
                ]);
            }
        }
    }
    public function doDel(Request $request)
    {

        $result = DB::table('member_data')->where(['id'=> $request->id])->delete();
        return  $this->resultHandles($result);
    }
    public function editStatus(Request $request)
    {
        $data = MemberModel::find($request->id);
        $data->status = $request->state;
        return $this->resultHandles($data->save());
    }


}