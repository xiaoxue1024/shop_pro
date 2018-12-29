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
Route::group(['namespace'=>'Admin', 'prefix'=>'admin', 'middleware'=>'adminLogin'], function (){
    //后台首页
    Route::get('/', 'IndexController@index');
});
