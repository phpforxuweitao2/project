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
<<<<<<< HEAD
    Route::get('/admin/index','IndexController@index');

=======
    Route::get('bk_index','IndexController@index');
>>>>>>> 4a840aab954f05abd0e0a764f5a60f89c83f9587
});
