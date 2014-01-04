<?php

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Composer Auto Loader
| 注册comoser自动加载程序
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
| Composer很方便, 能自动载入我们生成的类,我们只需要运用它，
| 这样在脚本中直接使用类时避免了手动载入类时引起的错误，感觉很会轻松。
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Include The Compiled Class File
| 包含编译后的类文件
|--------------------------------------------------------------------------
|
| To dramatically increase your application's performance, you may use a
| compiled class file which contains all of the classes commonly used
| by a request. The Artisan "optimize" is used to create this file.
| 
| 极大地提高应用程序的性能，在请求时你可能使用一个编译好的类文件，它包含了所有的常用的类。
| Artisan的"优化"就是被用来创建这样一个文件。
*/

if (file_exists($compiled = __DIR__.'/compiled.php'))
{
	require $compiled;
}

/*
|--------------------------------------------------------------------------
| Setup Patchwork UTF-8 Handling
| 设置适配库中UTF-8的处理
|--------------------------------------------------------------------------
|
| The Patchwork library provides solid handling of UTF-8 strings as well
| as provides replacements for all mb_* and iconv type functions that
| are not available by default in PHP. We'll setup this stuff here.
| 
| 这个适配库提供可靠的UTF-8字符串处理，除此之外还为所有mb_*函数和iconv类型函数提供替代程序，
| 它们默认在php中是不可使用的。在这里我们将设置它们。
*/

Patchwork\Utf8\Bootup::initMbstring();

/*
|--------------------------------------------------------------------------
| Register The Laravel Auto Loader
| 注册Laravel自动载入程序
|--------------------------------------------------------------------------
|
| We register an auto-loader "behind" the Composer loader that can load
| model classes on the fly, even if the autoload files have not been
| regenerated for the application. We'll add it to the stack here.
|
| 我们注册一个自动加载器 “绑定”到Composer加载程序，那样能动态地载入model类。
| 甚至如果应用程序还未生成这个被自动装载文件，它将会被加入到堆栈中。
*/

Illuminate\Support\ClassLoader::register();

/*
|--------------------------------------------------------------------------
| Register The Workbench Loaders
| 注册Laravel工作平台载入器
|--------------------------------------------------------------------------
|
| The Laravel workbench provides a convenient place to develop packages
| when working locally. However we will need to load in the Composer
| auto-load files for the packages so that these can be used here.
|
| Laravel工作平台为在本地开发packages的开发者提供了一个便利的地方，
|无论如何我们都将要把packages加载到Composer自动载入文件中，因此这些包都能在这里使用，
*/

if (is_dir($workbench = __DIR__.'/../workbench'))
{
	Illuminate\Workbench\Starter::start($workbench);
}
