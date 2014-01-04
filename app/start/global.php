<?php

/*
|--------------------------------------------------------------------------
| Register The Laravel Class Loader
| 注册Laravel 类加载器
|--------------------------------------------------------------------------
|
| In addition to using Composer, you may use the Laravel class loader to
| load your controllers and models. This is useful for keeping all of
| your classes in the "global" namespace without Composer updating.
|
| 除了使用Composer,你也可以使用Laravel类加载器来载入您的控制器和模型，
| 这对所有类中“全局”命名空间是有用的，而不用Composer来更新。
*/

ClassLoader::addDirectories(array(

	app_path().'/commands',
	app_path().'/controllers',
	app_path().'/models',
	app_path().'/database/seeds',

));

/*
|--------------------------------------------------------------------------
| Application Error Logger
| 应用程序坐蓐日志记录器
|--------------------------------------------------------------------------
|
| Here we will configure the error logger setup for the application which
| is built on top of the wonderful Monolog library. By default we will
| build a basic log file setup which creates a single file for logs.
|
| 这里我们将为应用程序配置日志记录器，它是建立在优秀的Monolog库之上的。
| 默认情况下我们将建立一个的基础的日志文件。
*/

Log::useFiles(storage_path().'/logs/laravel.log');

/*
|--------------------------------------------------------------------------
| Application Error Handler
| 应用程序错误处理
|--------------------------------------------------------------------------
|
| Here you may handle any errors that occur in your application, including
| logging them or displaying custom views for specific errors. You may
| even register several error handlers to handle different types of
| exceptions. If nothing is returned, the default error view is
| shown, which includes a detailed stack trace during debug.
|
| 在这里，您可以处理发生在应用程序中的任何错误，包括他们记录这些错误或把特定错误日志用自定义视图显示出来。
| 你甚至可以注册多个错误处理程序来处理不同类型的异常，
| 如果什么都没有返回，那么默认的错误视图就会显示，它包括在调试过程中详细的堆栈跟踪。
*/

App::error(function(Exception $exception, $code)
{
	Log::error($exception);
});

/*
|--------------------------------------------------------------------------
| Maintenance Mode Handler
| 维护模式处理程序
|--------------------------------------------------------------------------
|
| The "down" Artisan command gives you the ability to put an application
| into maintenance mode. Here, you will define what is displayed back
| to the user if maintenance mode is in effect for the application.
|
| "down"这个Artisan命令能让你的应用程序处于维护模式，这里，你能定义一些内容返回给用户，
*/

App::down(function()
{
	return Response::make("Be right back!", 503);
});

/*
|--------------------------------------------------------------------------
| Require The Filters File
| 请求过滤文件。
|--------------------------------------------------------------------------
|
| Next we will load the filters file for the application. This gives us
| a nice separate location to store our route and application filter
| definitions instead of putting them all in the main routes file.
|
| 接下来我们为应用程序将载入过滤文件，这给予我们一个不错的单独位置来分别存储我们的路由和应用程序过滤器定义
| 而不是把他们都放在主要的路由文件中。
*/

require app_path().'/filters.php';
