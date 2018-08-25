<?php
/*  User: tao    Date: 2018/8/23   Time: 22:33  */


namespace App\Http\Controllers\Admin;
use Hash;


class IndexController
{
    //显示后台首页方法
    public function index() {
        return view('AdminPublic.index');
    	// echo $str = Hash::make('123456');
    }
}
