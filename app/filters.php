<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
| 应用程序和路由 过滤器
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
| 在下面你会发现为应用程序提供了"before"和"after"事件，
| 可能会在请求您的应用程序的时候使用到before和after.
| 在这里你可以注册自定义的路由过滤器
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
| 身份认证过滤器
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
| 下面的过滤器是被用作验证登陆到应用的当前会话.
| 这个"basice"过滤器非常容易的结合HTTP基础验证进行快速、简单的检查。
*/

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::guest('login');
});


Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
| 这个"guest"过滤器与authentication过滤器相反，它简单的检查当前未登录的用户，
| 如果是就会发送一个重定向请求，你可以自由更改。
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
| CSRF（Cross-Site Request Forgery）过滤器负责保护您的应用程序，阻止跨站请求伪装攻击，
| 如果在请求中这个特别的token在用户会话中不匹配。我们将保释（保护的意思）。
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});
