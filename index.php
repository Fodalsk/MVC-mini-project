<?php
	$autoload = function($class){
		include($class.'.php');
	};

	spl_autoload_register($autoload);

	$app = new application;
	$app->execute();

?>