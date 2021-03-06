<?php
	//编码设置
	header('content-type:text/html;charset=utf-8');	

	define('DOC_ROOT',rtrim($_SERVER['SCRIPT_FILENAME'],'index.php'));

	//运行环境，错误报告,from CI
	define('ENVIRONMENT','development');

	if(defined('ENVIRONMENT')){
		switch(ENVIRONMENT){
			case 'development':
				error_reporting(E_ALL);
			break;

			case 'testing':
			case 'production':
				error_reporting(0);
			break;

			default:
				exit('运行环境/错误等级设置错误');
		}
	}

	require_once(DOC_ROOT . 'core/self.php');	

?>
