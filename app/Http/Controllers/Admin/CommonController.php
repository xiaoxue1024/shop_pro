<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/28
 * Time: 12:18
 */
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class CommonController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Common Controller
    |--------------------------------------------------------------------------
    |
    | 这是一个公共控制器
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