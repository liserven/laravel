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
Route::get('admin/member/doAdd', 'admin\MemberController@doAdd');
Route::get('admin/member/doEdit', 'admin\MemberController@doEdit');


//行为列表

Route::get('admin/action/tolist', 'admin\ActionController@toList');
Route::any('admin/action/doAdd', 'admin\ActionController@doAdd');
Route::get('admin/action/doEdit', 'admin\ActionController@doEdit');


//所有需要验证id的控制器
//Route::group(['middleware'=> ['IdMust'] ], function (){
//    //行为删除
//    Route::post('/admin/action/doDel', 'admin\ActionController@doDel');
//});


Route::post('/home', 'HomeController@index')->name('home');

//管理员列表
Route::get('demo', 'admin\MemberController@demo');


Route::group(['middleware'=> ['demo'] ], function (){

    Route::get('demo1', 'admin\MemberController@demo1');
    Route::get('demo2', 'admin\MemberController@demo2');
} );

