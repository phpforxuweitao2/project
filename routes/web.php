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
//前端
Route::get('/','Home\IndexController@index');
Route::group(['namespace'=>'Home'],function(){
    Route::get('/home/{name?}','HomeController@index')->where([
        'name'  => '\w+'
    ]);
});

//后端
Route::group(['namespace'=>'Admin'],function(){
    // 后台首页
    Route::get('bk_index','IndexController@index');


    // 前台会员模块
    Route::get('bk_users','UsersController@index');

    //后台登录模块
    Route::get('bk_login','LoginController@index');

    //后台登录处理
    Route::get('bk_dologin','LoginController@dologin');

    //后台管理员模块





>>>>>>> d233a2629bc7570f6ed3fb21cbb8b0ae689af4d1
});
