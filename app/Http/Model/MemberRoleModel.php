<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/10
 * Time: 9:58
 */

namespace App\Http\Model;


class MemberRoleModel extends BaseModel
{
    protected $table = 'member_role';

    public function members ()
    {
        return $this->belongsTo('App\Http\Model\RoleDataModel', 'mr_id', 'rd_id');
    }
}