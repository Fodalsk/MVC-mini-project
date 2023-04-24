<?php

	define('INCLUDE_PATH','http://localhost/project/');
	define('INCLUDE_PATH_FULL', 'http://localhost/project/Views/pages/');

	class Application
	{
		
		public function execute(){
			$url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : "Home";

			$url = ucfirst($url);
			$url.="Controller";
			if(file_exists('Controller/'.$url.'.php')){
				$className = "Controller\\".$url;
				$controller = new $className();
				$controller->execute();
			}else{
				die("Controller not found!");
			}
		}
	}

?>