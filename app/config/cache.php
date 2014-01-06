<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Default Cache Driver
	| 默认缓存驱动器
	|--------------------------------------------------------------------------
	|
	| This option controls the default cache "driver" that will be used when
	| using the Caching library. Of course, you may use other drivers any
	| time you wish. This is the default when another is not specified.
	|
	| Supported: "file", "database", "apc", "memcached", "redis", "array"
	|
	| 这个选项用于设置哪个缓存库，你可以使用任何一个，这个默认值跟其他支持的驱动没有什么不同。
	|
	| 支持: "file", "database", "apc", "memcached", "redis", "array"
	*/

	'driver' => 'file',

	/*
	|--------------------------------------------------------------------------
	| File Cache Location
	| 文件缓存位置
	|--------------------------------------------------------------------------
	|
	| When using the "file" cache driver, we need a location where the cache
	| files may be stored. A sensible default has been specified, but you
	| are free to change it to any other place on disk that you desire.
	|
	|当选择"file"缓存时，我们需要设置一个目录用于存储缓存，虽然这么默认值已经和科学了，
	|但你还是可以改为你磁盘上的任何位置。
	*/

	'path' => storage_path().'/cache',

	/*
	|--------------------------------------------------------------------------
	| Database Cache Connection
	| 数据库缓存连接
	|--------------------------------------------------------------------------
	|
	| When using the "database" cache driver you may specify the connection
	| that should be used to store the cached items. When this option is
	| null the default database connection will be utilized for cache.
	|
	| 当选择“database”缓存时，你可设置一个用于存储缓存项目(items)的数据库连接，
	| 如果下面的选项值为"null"，那么缓存就会使用默认的数据库连接。
	*/

	'connection' => null,

	/*
	|--------------------------------------------------------------------------
	| Database Cache Table
	| 数据库缓存表
	|--------------------------------------------------------------------------
	|
	| When using the "database" cache driver we need to know the table that
	| should be used to store the cached items. A default table name has
	| been provided but you're free to change it however you deem fit.
	|
	| 当使用数据库缓存时，我们需要知道那张表用来存储缓存项目，
	| 下面已经设置了默认，你可以随意的修改为你希望表。
	*/

	'table' => 'cache',

	/*
	|--------------------------------------------------------------------------
	| Memcached Servers
	| Memcached  服务器设置
	|--------------------------------------------------------------------------
	|
	| Now you may specify an array of your Memcached servers that should be
	| used when utilizing the Memcached cache driver. All of the servers
	| should contain a value for "host", "port", and "weight" options.
	|
	| 当选择Memcached缓存驱动时，现在你可以指定一个数组保存你的Memcached信息
	| 所有缓存服务器(每行一个)应该包含“主机”，“端口”，“权重”选项.
	*/

	'memcached' => array(

		array('host' => '127.0.0.1', 'port' => 11211, 'weight' => 100),

	),

	/*
	|--------------------------------------------------------------------------
	| Cache Key Prefix
	| 缓存键的前缀
	|--------------------------------------------------------------------------
	|
	| When utilizing a RAM based store such as APC or Memcached, there might
	| be other applications utilizing the same cache. So, we'll specify a
	| value to get prefixed to all our keys so we can avoid collisions.
	|
	| 当使用一个基于RAM(内存)的存储，如APC或Memcached等，有可能是其他应用程序也在使用。
	| 因此，我们将指定一个前缀，这样我们所有的Key就能避免冲突。
	*/

	'prefix' => 'laravel',

);
