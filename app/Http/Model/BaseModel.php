<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/9
 * Time: 14:03
 */

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    protected $dateFormat = 'U';
    const CREATED_AT = 'create_at';
    const UPDATED_AT = 'update_at';


    public static function getPage($where=[], $rows=10)
    {
        return self::where($where)->paginate($rows);
    }
}