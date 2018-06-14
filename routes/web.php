<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/login/index', 'admin\LoginController@index');
Route::post('/admin/login/login', 'admin\LoginController@login');
Route::post('/admin/exit', 'admin\LoginController@exit');



Route::middleware(['checkLogin'])->prefix('admin')->group(function (){
    Route::get('index', 'admin\IndexController@index');
    Route::post('member/doDel', 'admin\MemberController@doDel');

//后台首页
    Route::get('welcome', 'admin\IndexController@welcome');

//管理员列表
    Route::get('member/tolist', 'admin\MemberController@toList');
    Route::any('member/doAdd', 'admin\MemberController@doAdd');
    Route::get('member/doEdit', 'admin\MemberController@doEdit');
    Route::post('member/editStatus','admin\MemberController@editStatus');

//行为列表
    Route::get('action/tolist', 'admin\ActionController@toList');
    Route::any('action/doAdd', 'admin\ActionController@doAdd');
    Route::post('action/editOrder','admin\ActionController@editOrder');
    Route::post('action/editStatus','admin\ActionController@editStatus');
});





//角色管理
Route::get('admin/role/tolist', 'admin\RoleController@toList');
Route::any('admin/role/doAdd', 'admin\RoleController@doAdd');
Route::post('admin/role/editOrder','admin\RoleController@editOrder');
Route::post('admin/role/editStatus','admin\RoleController@editStatus');
Route::post('admin/role/doDel','admin\RoleController@doDel');



//公会管理后台操作路由
Route::get('gang/login/index', 'gang\LoginController@index');
Route::get('gang/login/login', 'gang\LoginController@login');
Route::get('gang/index/gangsList', 'gang\IndexController@gangsList');
Route::get('gang/admin_index', 'gang\IndexController@index');
Route::get('gang/welcome', 'admin\IndexController@welcome');

//此中路由有中间件
Route::middleware(['checkGangId'])->prefix('gang')->group(function (){
    Route::get('admin_home', 'gang\IndexController@home');

});


