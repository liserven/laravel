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
Route::get('/admin/login', 'Auth\LoginController@showLoginForm');

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


Route::prefix('gang')->group(function (){
    Route::get('login/index', 'gang\LoginController@index');
    Route::get('login/login', 'gang\LoginController@login');
    Route::get('index/gangsList', 'gang\IndexController@gangsList');
});


