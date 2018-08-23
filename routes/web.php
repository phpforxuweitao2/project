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

//根据模块名称写单条数据
//Route::get('/home','Home\HomeController@index');
//根据命名空间来写 路由组  Home模块  prefix=>'' 写路由前缀
Route::group(['namespace'=>'Home'],function(){
    Route::get('/home/{name?}','HomeController@index')->where([
        'name'  => '\w+'
    ]);
});