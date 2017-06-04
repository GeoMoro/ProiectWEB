<!DOCTYPE HTML>

<?php

	ob_start();

	error_reporting(0);

	ini_set('display_errors', 0);

	if(isset($_COOKIE['IDP1'])){

			$uid1 =  $_COOKIE["IDP1"];

	}
	
	if(isset($_COOKIE['IDP2'])){

			$uid2 =  $_COOKIE["IDP2"];

	}
	
	if(isset($_COOKIE['WeaponP1'])){

			$weapon1 =  $_COOKIE["WeaponP1"];

	}
	
	if(isset($_COOKIE['WeaponP2'])){

			$weapon2 =  $_COOKIE["WeaponP2"];

	}
	
	if(isset($_COOKIE['MaterialP1'])){

			$material1 =  $_COOKIE["MaterialP1"];

	}
	
	if(isset($_COOKIE['MaterialP2'])){

			$material2 =  $_COOKIE["MaterialP2"];

	}
	
	if(isset($_COOKIE['ToolP1'])){

			$tool1 =  $_COOKIE["ToolP1"];

	}
	
	if(isset($_COOKIE['ToolP2'])){

			$tool2 =  $_COOKIE["ToolP2"];

	}

?>

<html lang="en">

	<head>

	</head>

	<body>
       
		<h2><?php 
					
						echo '!!!'.$uid1.' '.$material1.' '.$tool1.' '.$weapon1.' '.$uid2.' '.$material2.' '.$tool2.' '.$weapon2.'???';
					
		?></h2>

	</body>

</html>