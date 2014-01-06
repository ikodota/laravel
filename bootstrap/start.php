<?php

/*
|--------------------------------------------------------------------------
| Create The Application
| 创建一个应用对象
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
| 我们要做的第一件事就是要创建一个新的Laravel应用程序实例，使Lavavel中的独立组件像胶水那样黏在一起。
| 并且它也是Ioc（控制反转）容器，为系统绑定所有各个部分。
*/

$app = new Illuminate\Foundation\Application;

/*
|--------------------------------------------------------------------------
| Detect The Application Environment
| 侦测应用程序对象环境
|--------------------------------------------------------------------------
|
| Laravel takes a dead simple approach to your application environments
| so you can just specify a machine name for the host that matches a
| given environment, then we will automatically detect it for you.
|
| Larvel提供简单的方法去检测你的环境，你只需要为你的主机指定一个机器名来匹配环境，
| 然后我们会自动为你侦测。
*/

$env = $app->detectEnvironment(array(

	'local' => array('your-machine-name'),

));

/*
|--------------------------------------------------------------------------
| Bind Paths
| 绑定路径
|--------------------------------------------------------------------------
|
| Here we are binding the paths configured in paths.php to the app. You
| should not be changing these here. If you need to change these you
| may do so within the paths.php file and they will be bound here.
|
| 在这里我们将把在paths.php中设置的路径绑定到你的应用程序中，你不应该更改这里。
| 如果你不得不改变的话，你可以在paths.php文件修改，他们就会绑定到这里。
*/

$app->bindInstallPaths(require __DIR__.'/paths.php');

/*
|--------------------------------------------------------------------------
| Load The Application
| 载入应用程序对象
|--------------------------------------------------------------------------
|
| Here we will load this Illuminate application. We will keep this in a
| separate location so we can isolate the creation of an application
| from the actual running of the application with a given request.
| 
| 在这里我们将载入Illuminate应用程序，我们保持它在一个独立的位置，这样与我们创建的的应用程序隔离。
| 
*/

$framework = $app['path.base'].'/vendor/laravel/framework/src';

require $framework.'/Illuminate/Foundation/start.php';

/*
|--------------------------------------------------------------------------
| Return The Application
| 返回应用程序对象
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
| 这行代码返回应用程序实例，这个实例是用于其他代码调用的，
| 因此从应用程序的实际运行和发送响应时我们可以单独的创建一个实例。
*/

return $app;
