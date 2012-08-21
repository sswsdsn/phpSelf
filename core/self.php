<?php
	if(!defined('DOC_ROOT'))
		exit('此脚本不能直接访问');

	//引入路由
	require_once(DOC_ROOT . 'core/route.php');
	
	$uri = new route();
	$controller = $uri->getController();
	$operate = $uri->getOperate();
	$params = $uri->getParams();
	
	if(!file_exists($controller)){
		$controller = DOC_ROOT . 'controller/404.php';
	}
	echo $controller;
?>
