<!DOCTYPE HTML>

<?php

	ob_start();

	error_reporting(0);

	ini_set('display_errors', 0);
?>

<html lang="en">

	<head>

	</head>

	<body>
       
		<span>
		<?php
		if($variable = 0) {
			DrawGame($uid1,$uid2);
		}
		else
			if($variable = 1) {
				WinGame($uid1);
			
				LostGame($uid2);
			}
			else
				if($variable = 2) {
					WinGame($uid2);
				
					LostGame($uid1);
				}
		?>
	</span>

	</body>

</html>