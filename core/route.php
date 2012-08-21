<?php
	class route{
		private $doc_root;
		private $pre_fix;
		private $uri_arr;
		private $controller;
		private $operate;
		private $params;

		public function __construct(){
			$this->doc_root = rtrim($_SERVER['SCRIPT_FILENAME'],'index.php') . 'controller/';
			$this->pre_fix  = rtrim($_SERVER['SCRIPT_NAME'],'index.php');
			$this->uri_arr  = explode('/',str_replace($this->pre_fix,'',$_SERVER['REQUEST_URI']));
		}

		public function getController(){
			$this->controller = $this->doc_root . array_shift($this->uri_arr) . 'Controller.php';
			return $this->controller;
		}

		public function getOperate(){
			$this->operate = array_shift($this->uri_arr); 
			return $this->operate;
		}

		public function getParams(){
			$this->params = $this->uri_arr;
			return $this->params;
		}
	}
?>
