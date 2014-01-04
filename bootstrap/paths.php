<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Application Path
	| 应用程序路径
	|--------------------------------------------------------------------------
	|
	| Here we just defined the path to the application directory. Most likely
	| you will never need to change this value as the default setup should
	| work perfectly fine for the vast majority of all our applications.
	|
	| 这里我们仅仅定义应用程序目录的路径。大多数时候或许你从不需要改变这个默认设置
	| 绝大多数应用只需要使用这个默认值。
	*/

	'app' => __DIR__.'/../app',

	/*
	|--------------------------------------------------------------------------
	| Public Path
	| 公共路径
	|--------------------------------------------------------------------------
	|
	| The public path contains the assets for your web application, such as
	| your JavaScript and CSS files, and also contains the primary entry
	| point for web requests into these applications from the outside.
	|
	| 这个公共路径包含了您的web应用的文件，比如JavaScript和CSS文件，
	| 也包含了从外部访问这些应用的入口文件。
	*/

	'public' => __DIR__.'/../public',

	/*
	|--------------------------------------------------------------------------
	| Base Path
	| 基础路径
	|--------------------------------------------------------------------------
	|
	| The base path is the root of the Laravel installation. Most likely you
	| will not need to change this value. But, if for some wild reason it
	| is necessary you will do so here, just proceed with some caution.
	|
	| 基础路径是安装Laravel的根目录，多数时候你不需要改变它，但如果有某种写原因必须要这么做，
	| 只需要改变这个目录，但要谨慎。
	*/

	'base' => __DIR__.'/..',

	/*
	|--------------------------------------------------------------------------
	| Storage Path
	| 存储路径
	|--------------------------------------------------------------------------
	|
	| The storage path is used by Laravel to store cached Blade views, logs
	| and other pieces of information. You may modify the path here when
	| you want to change the location of this directory for your apps.
	|
	| 这个存储路径被用来存储Laravel的缓存文件、日志和其他的信息片段。
	| 当你想要为你的应用程序改变这个路径，你可以修改这里。
	|
	*/

	'storage' => __DIR__.'/../app/storage',

);
