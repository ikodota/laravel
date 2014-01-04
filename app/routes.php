<?php

/*
|--------------------------------------------------------------------------
| Application Routes
| 应用程序路由
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
| 在这里可以为应用程序注册所有的路由，这是轻而易举的事，简单的告诉Laravel这些URIs就行了
| 当URI被请求时这个闭包（下面的function闭包）就会被执行。
*/

Route::get('/', function()
{
	return View::make('hello');
});
