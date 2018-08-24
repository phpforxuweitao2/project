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

Route::get('/home',function(){
	return '666666';
});

//后端
Route::group(['namespace'=>'Admin'],function(){
    Route::get('/admin/index','IndexController@index');

});
