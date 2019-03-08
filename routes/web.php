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
// 这是根目录
Route::get('/', function () {
    return view('welcome');
});

// 上边的/ 是网站的根目录


// 组长: 用户路由
Route::get('user','UserController');





// 组员: 这是商品的路由
Route::('goods','GoodsController');

