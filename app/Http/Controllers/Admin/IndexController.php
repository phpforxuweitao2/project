<?php
/*  User: tao    Date: 2018/8/23   Time: 22:33  */


namespace App\Http\Controllers\Admin;


class IndexController
{
    //显示后台首页方法
    public function index() {
        return view('admin.index');
    }
}
