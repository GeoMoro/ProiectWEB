<!DOCTYPE HTML>

<?php

	include "TWVerificare.php";

	ob_start();

	error_reporting(0);

	ini_set('display_errors', 0);

	if(isset($_COOKIE['UserID'])){

		$uid =  $_COOKIE["UserID"];

	}

?>

<html lang="en">

	<head>

		<title>MyRobot</title>

		<meta charset="utf-8" />

		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="TW_CSS/css/main.css" />

	</head>

	<body background="TW_CSS/img/back.png">

	<!--	<audio autoplay id="audio">

			<source src="TW_CSS/img/Music.mp3" type="audio/mpeg">

		</audio> -->

		<div id="page-wrapper">

			<div id="header-wrapper">

				<div class="container">

					<div class="row">

						<div class="12u">

							<header id="header">

								<img src="TW_CSS/img/BomberBot.png" alt="Bomberbot" id="imgbomberbot" >

								<nav>

									<a href="2WelcomeLogat.php" > Home </a>

									<a href="3TopPlayers.php" > TopPlayers </a>

									<a href="8Rules.php" > How to </a>

								</nav>

							</header> 	

						</div>

					</div>

				</div>

			</div>	

		    <div> 

				<div id="centrat">

					<div class="main2">

						<br>

						<h2>My Robot</h2>

						<br>

						<h2><?php $Robotname = getRobotName($uid); echo filter($Robotname);?></h2>

						<br><br>

						<form action="" method='post'>

							<h3>Robot's Name:&nbsp;&nbsp;<input type="text" placeholder="ex: John Cenaitor" name="CurrentName" id="ChangeRobot" value="<?php echo filter($Robotname); ?>"><!--&nbsp;&nbsp;&nbsp;--></h3>

							<br>

							<h3>Material :  <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->

								<select class = "select" name="Material">

									<option value = "NORMAL">NORMAL</option>

									<option value = "WOOD">WOOD</option>

									<option value = "SILVER">SILVER</option>

									<option value = "STEEL">STEEL</option>

									<option value = "GOLD">GOLD</option>

									<option value = "DIAMOND">DIAMOND</option>

									<option value = "EMERALD">EMERALD</option>

									<option value = "OBSIDIAN">OBSIDIAN</option>

								</select>

								<!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->

							</h3>

							<br>

							<h3>Bomb's Type:<!--&nbsp;&nbsp;&nbsp;-->

								<select class = "select" name="Weapon">

									<option value = "Normal Bombs">Short Ranged Bombs</option>

									<option value = "Long Ranged Bombs">Long Ranged Bombs</option>

									<option value = "Poison Bombs">Poisoned Bombs</option>

									<option value = "Metal Bombs">Metal Bombs</option>

								</select>

								<!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->

							</h3>

							<br>

							<h3>Tool : <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->

								<select class = "select" name="Tool">

									<option value = "NO BOMB COLLISION">No Bomb Collition</option>

									<option value = "BOMB COLLISION">Bomb Collition</option>

									<option value = "JetPack">JetPack</option>

								</select>

								<!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->

							</h3>
							
							<br>

							<span id="spancolorred"> 

								<?php

									if(isset($_POST['SubmitChange'])) {

										$numeNouRobot = $_POST["CurrentName"];

										$checkName = validPremume($numeNouRobot);

										$tool = $_POST["Tool"];

										$material = $_POST["Material"];

										$weapon = $_POST["Weapon"];

										if($checkName == 1) {

											setRobotName($uid,$numeNouRobot);

											setRobotMaterial($uid,$material);

											setRobotTool($uid,$tool);

											setRobotWeapon($uid,$weapon);

											$cookie_value = $uid;

											setcookie("UserID", $cookie_value,time() + (86400 * 30),'/', 'localhost');//, "/","",true);// time() + (86400 * 30), "/","",true);  // 86400 = o zi

											header('Location: 7MyRobot.php');

										}

										else {

											echo 'Nume invalid!';

										}

									}

								?>

							</span>
							
							<button id="Submit" name="SubmitChange" Value="Register" type="Submit">Save change</button>
							
							<br>

							<section class = "topmenu1">

									<button id="Submit" name="PlayAGame" Value="Register" type="Submit"> Play a game </button> 

							</section>

							<?php

								if(isset($_POST['PlayAGame'])) {

									$cookie_value = $uid;

									setcookie("UserID", $cookie_value,time() + (86400 * 30),'/', 'localhost');//, "/","",true);// time() + (86400 * 30), "/","",true);  // 86400 = o zi

									header('Location: 4Jocul.php');

								}

							?>

							<br><br><br><br><br><br><br><br><br><br>

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

		</div>

<!--		<script>

		    var audio = document.getElementById("audio");

		    audio.volume = 0.05;

		</script>  -->

	</body>

</html>