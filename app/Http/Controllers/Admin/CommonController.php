<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/28
 * Time: 12:18
 */
namespace App\Http\Controllers\Admin;

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
    }

    /**
     * 重写验证类
     *
     * @param $request
     * @param $rules
     * @param $message
     */
    /*public function validate($request, $rules, $message){
        $Validator = Validator::make($request->all(),$rules,$message);
        if($Validator->fails()){
            $result = [];
            foreach(json_decode(json_encode($Validator->errors()),true) as $k => $v){
                $result[$k] = $v[0];
            }
            echo json_encode($result);
            die;
        }
    }*/
}