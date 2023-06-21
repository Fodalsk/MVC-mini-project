<?php
	$autoload = function($class){
		if($class == '\EMail'){
			include 'phpmailer/PHPMailerAutoload.php';
		}
		include($class.'.php');
	};

	spl_autoload_register($autoload);

	$app = new application;
	$app->execute();

?>