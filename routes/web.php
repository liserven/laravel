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
Route::get('/admin/login/login', 'admin\LoginController@login');

//后台首页
Route::get('admin/index', 'admin\IndexController@index');
Route::get('admin/welcome', 'admin\IndexController@welcome');

//管理员列表
Route::get('admin/member/tolist', 'admin\MemberController@toList');
Route::any('admin/member/doAdd', 'admin\MemberController@doAdd');
Route::get('admin/member/doEdit', 'admin\MemberController@doEdit');
Route::post('admin/member/editStatus','admin\MemberController@editStatus');

Route::prefix('admin')->group(function (){
    Route::post('member/doDel', 'admin\MemberController@doDel');
});



//行为列表
Route::get('admin/action/tolist', 'admin\ActionController@toList');
Route::any('admin/action/doAdd', 'admin\ActionController@doAdd');
Route::post('admin/action/editOrder','admin\ActionController@editOrder');
Route::post('admin/action/editStatus','admin\ActionController@editStatus');


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


