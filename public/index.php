<?php
/**
 * Laravel - A PHP Framework For Web Artisans 
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 */

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
| Composer为应用程序提供一个方便的自动载入生成的类的加载器，我们只需要运用它！
|我们只需要在tautoload.php中require它，不会犯手段载入时候引起的错误，感觉很轻松。
*/

require __DIR__.'/../bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
| 开灯
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let's turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight these users.
|
| 我们需要为PHP开发指引光明，所以让我们开灯，这个引导程序会让框架为我们使用，
| 那么它将加载这个应用程序,这样我们可以运行它并将响应发送回浏览器和这些用户。
*/

$app = require_once __DIR__.'/../bootstrap/start.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can simply call the run method,
| which will execute the request and send the response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have whipped up for them.
|
| 一旦我们拥有这个应用程序，我们简单的调用run方法，那将执行这些请求并发送响应到客户端浏览器，
|让他们享受这个富有创造性的和绝妙的应用程序。
*/

$app->run();
