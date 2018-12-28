<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/28
 * Time: 12:18
 */
namespace App\Http\Controllers\Auth;


class AdminController extends CommonController
{
    /*
    |--------------------------------------------------------------------------
    | Admin Controller
    |--------------------------------------------------------------------------
    |
    | 这是一个管理员控制器
    |
    */

    /**
     * 构造函数
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('privilege');
    }
}