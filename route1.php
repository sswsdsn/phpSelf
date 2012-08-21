<?php
	define('DOC_ROOT',rtrim($_SERVER['SCRIPT_FILENAME'],'index.php'));
	define('PRE_FIX',rtrim($_SERVER['SCRIPT_NAME'],'index.php'));
	$uri_arr = explode('/',str_replace(PRE_FIX,'',$_SERVER['REQUEST_URI']));
	$controller = array_shift($uri_arr);
	$operate = array_shift($uri_arr);
	$params = $uri_arr;
	echo $controller . '<br/>' . $operate . '<br/>';
	print_r($params);
	echo '<pre>';print_r($_SERVER);
	echo '</pre>';
?>
