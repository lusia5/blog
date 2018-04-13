<?php

return array(
	'db'	=>	array( // 数据库信息组
		'host'	=>	'127.0.0.1',
		'port'	=>	'3306',
		'user'	=>	'root',
		'pass'	=>	'123abc',
		'charset'=>	'utf8',
		'dbname' => 'blog1'
	),
	'App'	=>	array( // 应用程序组
		'default_platform'=>'Back',
		'dao'	=>	'pdo',// 这里可以是pdo或mysql
	),
	'Home'	=>	array( // 前台组
		'default_controller'=>'Index',
		'default_action'	=>'index'
	),
	'Back'	=>	array(	// 后台组
		'default_controller'=>'Admin',
		'default_action'	=>'index'
	),
	'Captcha'=> array(//验证码
		'width'=>80,
		'height'=>30,
		'pixelnum'=>0.03,
		'linenum'=>5,
		'stringnum'=>4
	),
	// 其他
);

