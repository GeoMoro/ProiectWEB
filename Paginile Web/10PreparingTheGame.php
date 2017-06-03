<!DOCTYPE HTML>

<?php

	include "TWVerificare.php";

	ob_start();

	error_reporting(0);

	ini_set('display_errors', 0);

	if(isset($_COOKIE['UserID1'])){

		$uid1 = $_COOKIE["UserID1"];

	}

	if(isset($_COOKIE['UserID2'])){

		$uid2 = $_COOKIE["UserID2"];

	}

?>


<html>

	<head>

		<title>Login2ndPlayer</title>

		<meta charset="utf-8" />

		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="TW_CSS/css/main.css" />

	</head>

	<body>

		<div id="page-wrapper">

			<div id="header-wrapper">

				<div class="container">

					<div class="row">

						<div class="12u">

							<header id="header">

								<img src="TW_CSS/img/BomberBot.png" alt="Bomberbot" style= "width:713px;height:90px;" >

							</header>

						</div>

					</div>

				</div>

			</div>

			<div class="container">

				<div class="row main-row">

					<div class="8u 12u(mobile)">

						<form action="" method='post'>

							<h2> Player 1: <?php 

								$Name1 = getUserName($uid1);

								echo $Name1;

							 ?></h2>

							<h3>Material :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

								<select class = "select" name="Material1">
								
									<option value = "<?php echo getUserMaterial($uid1); ?>"><?php echo getUserMaterial($uid1); ?> - Saved</option>

									<option value = "WOOD">WOOD</option>

									<option value = "STONE">STONE</option>

									<option value = "SILVER">SILVER</option>

									<option value = "STEEL">STEEL</option>

									<option value = "GOLD">GOLD</option>

									<option value = "DIAMOND">DIAMOND</option>

									<option value = "PLATINUM">PLATINUM</option>

									<option value = "OBSIDIAN">OBSIDIAN</option>

								</select>

								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

							</h3>

							<br>

							<h3>Bomb's Type:&nbsp;&nbsp;&nbsp;

								<select class = "select" name="Weapon1">
								
									<option value = "<?php echo getUserWeapon($uid1); ?>"><?php echo getUserWeapon($uid1); ?> - Saved</option>

									<option value = "Normal Bombs">Normal Bombs(3 ranged)</option>

									<option value = "Long Ranged Bombs">Long Ranged Bombs(5 ranged)</option>

									<option value = "Poison Bombs">Poison Bombs(3 ranged)</option>

									<option value = "Proximity Mine">Proximity Mine(1x1 ranged)</option>

									<option value = "Rocket Launcher">Rocket Launcher(7 ranged 1 way)</option>

								</select>

								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

							</h3>

							<br>

							<h3>Tool : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

								<select class = "select" name="Tool1">
								
									<option value = "<?php echo getUserTool($uid1); ?>"><?php echo getUserTool($uid1); ?> - Saved</option>

									<option value = "Guardian">Guardian(+1 life)</option>

									<option value = "JetPack">JetPack(jump over obstacles)</option>

									<option value = "Detonator">Detonator</option>

									<option value = "Kick">Kick(Push the bomb trough 1 obstacle)</option>

									<option value = "Slide">Slide(Push the bomb trough the wall)</option>

									<option value = "Invisibility">Invisibility</option>

									<option value = "Redbull">Redbull(+Speed)</</option>

								</select>

								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

							</h3>

						<hr>

							<h2> Player 2: <?php 

								$Name2 = getUserName($uid2);

								echo $Name2;

							 ?></h2>

							<h3>Material :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

								<select class = "select" name="Material2">

									<option value = "<?php echo getUserMaterial($uid2); ?>"><?php echo getUserMaterial($uid2); ?> - Saved</option>

									<option value = "WOOD">WOOD</option>

									<option value = "STONE">STONE</option>

									<option value = "SILVER">SILVER</option>

									<option value = "STEEL">STEEL</option>

									<option value = "GOLD">GOLD</option>

									<option value = "DIAMOND">DIAMOND</option>

									<option value = "PLATINUM">PLATINUM</option>

									<option value = "OBSIDIAN">OBSIDIAN</option>

								</select>

								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

							</h3>

							<br>

							<h3>Bomb's Type:&nbsp;&nbsp;&nbsp;

								<select class = "select" name="Weapon2">
								
									<option value = "<?php echo getUserWeapon($uid2); ?>"><?php echo getUserWeapon($uid2); ?> - Saved</option>

									<option value = "Normal Bombs">Normal Bombs(3 ranged)</option>

									<option value = "Long Ranged Bombs">Long Ranged Bombs(5 ranged)</option>

									<option value = "Poison Bombs">Poison Bombs(3 ranged)</option>

									<option value = "Proximity Mine">Proximity Mine(1x1 ranged)</option>

									<option value = "Rocket Launcher">Rocket Launcher(7 ranged 1 way)</option>

								</select>

								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

							</h3>

							<br>

							<h3>Tool : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

								<select class="select" name="Tool2">
								
									<option value = "<?php echo getUserTool($uid2); ?>"><?php echo getUserTool($uid2); ?> - Saved</option>

									<option value = "Guardian">Guardian(+1 life)</option>

									<option value = "JetPack">JetPack(jump over obstacles)</option>

									<option value = "Detonator">Detonator</option>

									<option value = "Kick">Kick(Push the bomb trough 1 obstacle)</option>

									<option value = "Slide">Slide(Push the bomb trough the wall)</option>

									<option value = "Invisibility">Invisibility</option>

									<option value = "Redbull">Redbull(+Speed)</</option>

								</select>

								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

							</h3>

						<!--	<input type="checkbox" name="ch2" value="Yes" /> Do you want to play with your saved Weapon, Tool and Material? -->

							</br></br>

							<button id="Submit" name="Submit" Value="Logout" type="Submit"> Disconnect from <?php echo $Name2 ?> </button>

							<?php 

								if(isset($_POST['Submit'])) {

									setPlayerOff($uid2);

									setcookie("UserID2", "", time() - 3600);

									header('Location: 9Login2ndPlayer.php');

								}

							?>

					<!--	</form> -->

					</div>

				</div>

			</div>

			<hr>

			<div class="container">

				<div class="row main-row">

				<!--	<form action="" method='post'> -->

						<section class = "topmenu1">

							<button id="Submit" name="PlayAGame" Value="Play" type="Submit"> Play a game </button> 

								<?php

									if(isset($_POST['PlayAGame'])) {

										$ToolP1 = $_POST["Tool1"];

										//echo $ToolP1;

										$MaterialP1 = $_POST["Material1"];

										$WeaponP1 = $_POST["Weapon1"];

										$ToolP2 = $_POST["Tool2"];

										$MaterialP2 = $_POST["Material2"];

										$WeaponP2 = $_POST["Weapon2"];

										setcookie("IDP1", $uid1,time() + (86400 * 30),'/', 'localhost');//, "/","",true);// time() + (86400 * 30), "/","",true);

										setcookie("MaterialP1", $MaterialP1,time() + (86400 * 30),'/', 'localhost');//, "/","",true);// time() + (86400 * 30), "/","",true);

										setcookie("WeaponP1", $WeaponP1,time() + (86400 * 30),'/', 'localhost');//, "/","",true);// time() + (86400 * 30), "/","",true);

										setcookie("ToolP1", $ToolP1,time() + (86400 * 30),'/', 'localhost');//, "/","",true);// time() + (86400 * 30), "/","",true);

										setcookie("IDP2", $uid2,time() + (86400 * 30),'/', 'localhost');//, "/","",true);// time() + (86400 * 30), "/","",true);

										setcookie("MaterialP2", $MaterialP2,time() + (86400 * 30),'/', 'localhost');//, "/","",true);// time() + (86400 * 30), "/","",true);

										setcookie("WeaponP2", $WeaponP2,time() + (86400 * 30),'/', 'localhost');//, "/","",true);// time() + (86400 * 30), "/","",true);

										setcookie("ToolP2", $ToolP2,time() + (86400 * 30),'/', 'localhost');//, "/","",true);// time() + (86400 * 30), "/","",true);

									//	echo '!!!'.$uid1.'! '.$MaterialP1.'! '.$ToolP1.'! '.$WeaponP1.'! '.$uid2.'! '.$MaterialP2.'! '.$ToolP2.'! '.$WeaponP2.'???';
										header('Location: 11Test.php');

									}

								?>

						</section>

					</form>

				</div>

			</div>

			<div id="footer-wrapper">

				<div class="container">

					<div class="row">

						<div class="8u 12u(mobile)"></div>

						<div class="4u 12u(mobile)"></div>

					</div>

					<div class="row">

						<div class="12u">

							<div id="copyright"> Copyright © 2017 BomberBot |	Powered by UAIC/2B3/VMMMteam </div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</body>

</html>