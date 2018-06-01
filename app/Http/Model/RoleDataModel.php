<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/10
 * Time: 10:01
 */

namespace App\Http\Model;


class RoleDataModel extends BaseModel
{
    protected $table = 'role_data';
    protected $dateFormat = 'U';
    protected $primaryKey = 'rd_id';



}