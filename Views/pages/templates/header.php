<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH_FULL ?>css/style.css">
	<title><?php echo self::title ?></title>
</head>
<body>
<header>
	<div class="center">
		<div class="logo">
			<h2>Amauri Junior</h2>
		</div><!--logo-->
		<nav class="menu">
			<?php
				foreach($this->menuItems as $key => $value){
					echo '<a href="'.INCLUDE_PATH.strtolower($value).'">'.$value.'</a><br>';
				}
			?>
		</nav>
	</div><!--center-->
</header>