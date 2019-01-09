<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware'=>'enableCorss'], function (){
    Route::get('/login', 'Admin\AdminController@login'); // 管理员登录
    Route::get('/', 'Admin\AdminController@index'); //获取管理员
    Route::post('/', 'Admin\AdminController@add'); //添加管理员
    Route::put('/', 'Admin\AdminController@update'); //更新管理员
    Route::delete('/', 'Admin\AdminController@delete'); //删除管理员
});
