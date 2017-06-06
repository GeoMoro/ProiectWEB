<!DOCTYPE HTML>

<?php

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

		<link rel="stylesheet" href="http://localhost/kite/assets/css/main.css" />

	</head>

	<body>

		<div id="page-wrapper">

			<div id="header-wrapper">

				<div class="container">

					<div class="row">

						<div class="12u">

							<header id="header">

								<img src="http://localhost/kite/assets/img/BomberBot.png" alt="Bomberbot" style= "width:713px;height:76px;" >
 

							</header>

						</div>

					</div>

				</div>

			</div>

					<div class="container">

				<div class="row main-row">

					<div class="8u 12u(mobile)">
					
					<div id="centrat">

						<form action="" method='post' id="formlastpage">

							<br>

							<h3 id="playerlastpage"> Player 1: <?php 

								$model->getUserName($uid1);

								echo filter($basket->UserName);

							 ?></h3>

							<h3>Material : 

								<select class = "select" name="Material1">

									<option value = "<?php $model->getUserMaterial($uid1); echo $basket->UserMaterial; ?>"><?php echo $model->getUserMaterial($uid1); echo $basket->UserMaterial; ?> - Saved</option>

									<option value = "NORMAL">NORMAL</option>

									<option value = "WOOD">WOOD</option>

									<option value = "SILVER">SILVER</option>

									<option value = "STEEL">STEEL</option>

									<option value = "GOLD">GOLD</option>

									<option value = "DIAMOND">DIAMOND</option>

									<option value = "EMERALD">EMERALD</option>

									<option value = "OBSIDIAN">OBSIDIAN</option>

								</select>

							</h3>

							<br>

							<h3>Bomb:

								<select class = "select" name="Weapon1">

									<option value = "<?php $model->getUserWeapon($uid1); echo $basket->UserWeapon; ?>"><?php $model->getUserWeapon($uid1); echo $basket->UserWeapon; ?> - Saved</option>

									<option value = "Normal Bombs">Short Ranged Bombs</option>

									<option value = "Long Ranged Bombs">Long Ranged Bombs</option>

									<option value = "Poison Bombs">Poisoned Bombs</option>

									<option value = "Metal Bombs">Metal Bombs</option>

								</select>

							</h3>

							<br>

							<h3>Tool :

								<select class = "select" name="Tool1">

									<option value = "<?php $model->getUserTool($uid1); echo $basket->UserTool; ?>"><?php $model->getUserTool($uid1); echo $basket->UserTool; ?> - Saved</option>

									<option value = "NO BOMB COLLISION">No Bomb Collition</option>

									<option value = "BOMB COLLISION">Bomb Collition</option>

									<option value = "JetPack">JetPack</option>

								</select>

							</h3>

							<hr>

							<h3 id="playerlastpage">Player 2: <?php 

								$model->getUserName($uid2);

								echo filter($basket->UserName);

							 ?> </h3>

							<h3>Material : 
							
								<select class = "select" name="Material2">

									<option value = "<?php $model->getUserMaterial($uid2); echo $basket->UserMaterial; ?>"><?php $model->getUserMaterial($uid2); echo $basket->UserMaterial;  ?> - Saved</option>

									<option value = "NORMAL">NORMAL</option>

									<option value = "WOOD">WOOD</option>

									<option value = "SILVER">SILVER</option>

									<option value = "STEEL">STEEL</option>

									<option value = "GOLD">GOLD</option>

									<option value = "DIAMOND">DIAMOND</option>

									<option value = "EMERALD">EMERALD</option>

									<option value = "OBSIDIAN">OBSIDIAN</option>

								</select>

							</h3>

							<br>

							<h3> Bomb:

								<select class = "select" name="Weapon2">

									<option value = "<?php $model->getUserWeapon($uid2); echo $basket->UserWeapon;  ?>"><?php $model->getUserWeapon($uid2); echo $basket->UserWeapon;  ?> - Saved</option>

									<option value = "Normal Bombs">Short Ranged Bombs</option>

									<option value = "Long Ranged Bombs">Long Ranged Bombs</option>

									<option value = "Poison Bombs">Poisoned Bombs</option>

									<option value = "Metal Bombs">Metal Bombs</option>

								</select>

							</h3>

							<br>

							<h3>Tool :

								<select class="select" name="Tool2">

									<option value = "<?php $model->getUserTool($uid2); echo $basket->UserTool;  ?>"><?php $model->getUserTool($uid2); echo $basket->UserTool; ?> - Saved</option>

									<option value = "NO BOMB COLLISION">No Bomb Collition</option>

									<option value = "BOMB COLLISION">Bomb Collition</option>

									<option value = "JetPack">JetPack</option>

								</select>

							</h3>

							</br></br>

							<button id="Submit" name="Submit" Value="Logout" type="Submit"> Disconnect from <?php echo $Name2 ?> </button>

							<?php 

								if(isset($_POST['Submit'])) {

									$model->setPlayerOff($uid2);

									setcookie("UserID2", "", time() - 3600);

									header('Location: 9Login2ndPlayer.php');

								}

							?>

							<br><br>

							<hr>
							
							</div>

					<!--	</form> -->

					</div>

				</div>

			</div>

			<div class="container">

				<div class="row main-row">

				<!--	<form action="" method='post'> -->

						<section class = "topmenu1" id="formlastpage">

							<label id="labellastpage">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Terain</label>

							<select class = "select" name= "Terenul">

								<option value = "Cave">Cave</option>

								<option value = "Mountain">Mountain</option>

								<option value = "Vulcan">Vulcan</option>

								<option value = "Beach">Beach</option>

							</select>

							<br>

							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

							<button id="Submit" name="PlayAGame" Value="Play" type="Submit" > Play a game </button> 

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

										$Teren = $_POST["Terenul"];

										echo '!!!'.$Teren.'???';

										if($Teren=='Cave') {

											header('Location: FinalGameV1.0/cave.php'); 

										}

										else

											if($Teren=='Beach') {

												header('Location: FinalGameV1.0/beach.php'); 

											}

											else

												if($Teren=='Mountain') {

													header('Location: FinalGameV1.0/mountain.php'); 

												}

												else

													if($Teren=='Vulcan') {

														header('Location: FinalGameV1.0/vulcan.php');

													}

									}

								?>

						</section>

					</form>

				</div>

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

	</body>

</html>