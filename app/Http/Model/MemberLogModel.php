<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/6/12
 * Time: 11:55
 */

namespace App\Http\Model;


use Illuminate\Support\Facades\DB;

class MemberLogModel extends BaseModel
{
    protected $table = 'member_log';


    public static function addMemberLog($userId, $content = '', $ip)
    {
        DB::table('member_log')->insert([
            'member_id'=> $userId,
            'content' => $content,
            'ip'=> $ip,
            'created_at' => time(),
        ]);
    }
}