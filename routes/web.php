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

Route::get('oss1','test\TestController@oss1');
Route::get('oss2','test\TestController@oss2'); //上传图片

Route::get('ToOss','cron\CronController@ToOss'); //定时任务

Route::get('videoShow','video\VideoController@videoShow');
Route::get('show','video\VideoController@show');

Route::get('ossNotify','oss\OssController@ossNotify');