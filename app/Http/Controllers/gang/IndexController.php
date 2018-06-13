<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/6/12
 * Time: 18:02
 */

namespace App\Http\Controllers\gang;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends BaseController
{


    public function beForeAction()
    {
        $this->gangId = session('gangsId');
    }

    public function index(Request $request)
    {
        $id = $request->gang_default_id;
        session([ 'gangsId'=> $id]);
        return redirect()->to('gang/admin_home');
    }

    public function home()
    {
        $actions = $this->getAction();

        return view('gang.index.index', [
            'menu'=> $actions
        ]);
    }
    public function welcome()
    {
        return view('gang.index.welcome');

    }

    public function gangsList()
    {
        $gangIds = session('gangs_id');
        $gangs = DB::table('gangs')->whereIn('id', $gangIds)->get();
        return view('gang.index.gang_list', [ 'list'=> $gangs] );
    }
}