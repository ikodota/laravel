<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Default Authentication Driver
	| 默认身份验证驱动器
	|--------------------------------------------------------------------------
	|
	| This option controls the authentication driver that will be utilized.
	| This driver manages the retrieval and authentication of the users
	| attempting to get access to protected areas of your application.
	|
	| Supported: "database", "eloquent"
	|
	| 这个选项用于控制验证驱动器，这个驱动器管理用户的索引和身份验证，试图保护你的应用程序的访问安全。
	| 支持的驱动器: "database","eloquent"
	*/

	'driver' => 'eloquent',

	/*
	|--------------------------------------------------------------------------
	| Authentication Model
	| 身份验证模型
	|--------------------------------------------------------------------------
	|
	| When using the "Eloquent" authentication driver, we need to know which
	| Eloquent model should be used to retrieve your users. Of course, it
	| is often just the "User" model but you may use whatever you like.
	|
	| 当使用"Eloquent"身份验证驱动时，我们需要知道哪个Eloquent模型用来查找用户
	| 当然，他通常只是"User"模型，但你可以使用任何模型。
	*/

	'model' => 'User',

	/*
	|--------------------------------------------------------------------------
	| Authentication Table
	| 身份验证表
	|--------------------------------------------------------------------------
	|
	| When using the "Database" authentication driver, we need to know which
	| table should be used to retrieve your users. We have chosen a basic
	| default value but you may easily change it to any table you like.
	|
	| 当使用"Database"身份验证驱动器时，我们需要知道那个数据表用来查找用户，
	| 我们选择了一个基本的默认值，但你可以很容易将它更改为任何你喜欢的表。
	*/

	'table' => 'users',

	/*
	|--------------------------------------------------------------------------
	| Password Reminder Settings
	| 密码找回设置
	|--------------------------------------------------------------------------
	|
	| Here you may set the settings for password reminders, including a view
	| that should be used as your password reminder e-mail. You will also
	| be able to set the name of the table that holds the reset tokens.
	|
	| The "expire" time is the number of minutes that the reminder should be
	| considered valid. This security feature keeps tokens short-lived so
	| they have less time to be guessed. You may change this as needed.
	|
	| 在这里你可以对密码找回进行设置，包括了一个用于找回密码的e-maill的视图，
	| 你也能设置一个表来保存这些重置tokens.
	|
	| 这个"expire"的单位是分钟，它们用于对tokens的进行安全加固，会在指定的分钟后过期，
	| 如果你觉得太长可能会被猜到，可改成你需要的值即可
	*/

	'reminder' => array(

		'email' => 'emails.auth.reminder',

		'table' => 'password_reminders',

		'expire' => 60,

	),

);
