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
    public $timestamps  = false;
    public static function getPage($where=[], $rows=10)
    {
        return self::where($where)->orderBy('order','asc')->orderBy('created_at', 'desc')->paginate($rows);
    }
}