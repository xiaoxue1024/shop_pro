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

// 后台接口
Route::group(['namespace'=>'Admin', 'prefix'=>'admin', 'middleware'=>['adminLogin', 'enableCorss']], function (){
    Route::post('/login', 'AdminController@login'); // 管理员登录
    Route::get('/', 'AdminController@index'); //获取管理员
    Route::post('/', 'AdminController@add'); //添加管理员
    Route::put('/', 'AdminController@update'); //更新管理员
    Route::delete('/', 'AdminController@delete'); //删除管理员
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
