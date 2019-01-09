<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/28
 * Time: 12:18
 */
namespace App\Http\Controllers\Admin;

use Validator;
use Illuminate\Http\Request;
use App\Model\Admin;
use App\Model\Privilege;

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
    }

    public function index(Request $request)
    {
        $all = $request->input();
        return $all;
    }

    public function login(Request $request)
    {
        /*// 验证字段
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 204);
        }
        // 实例化管理员数据库
        $AdminModel = new Admin();
        $one = $AdminModel->login();*/
        if (!session('name')) {
            session(['name' => 'value']);
            return session('name');
        } else {
            return '11111';
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required|email',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $data = '';
        $PrivilegeModel = new Privilege();
        $res = $PrivilegeModel->register($data);
    }
}