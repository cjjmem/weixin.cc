<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome2');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

$admin = [
    'prefix' => 'admin',
    'namespace' => 'Admin',
   //暂时未发现怎么使用 'middleware' => ['web', 'admin']
];

Route::group($admin, function () {
    //Route::get('/', function () {});
    Route::get('/', 'DashBoardController@getIndex');
});
