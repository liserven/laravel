<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/6/12
 * Time: 18:02
 */

namespace App\Http\Controllers\gang;


use App\Http\Controllers\admin\BaseController;
use Illuminate\Support\Facades\DB;

class IndexController extends BaseController
{
    public function gangsList()
    {
        $gangIds = session('gangs_id');
        $gangs = DB::table('gangs')->whereIn('id', $gangIds)->get();
        return view('gang.index.gang_list', [ 'list'=> $gangs] );
    }
}