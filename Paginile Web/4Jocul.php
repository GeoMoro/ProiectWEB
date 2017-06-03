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

<html>

	<head>

		<title>Jocul</title>

		<meta charset="utf-8" />

		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="TW_CSS/css/main.css"/>

	</head>

	<body>

		<audio autoplay id="audio">

			<source src="TW_CSS/img/Music.mp3" type="audio/mpeg">

		</audio>

		<div id="page-wrapper">

			<div id="header-wrapper">

				<div class="container">

					<div class="row">

						<div class="12u">

							<header id="header">

								<img src="TW_CSS/img/BomberBot.png" alt="Bomberbot" style= "width:713px;height:90px;" >

								<nav>

									<a href="2WelcomeLogat.php" >Home</a>

									<a href="3TopPlayers.php" > TopPlayers </a>

									<a href="8Rules.php"> How to </a>

								</nav>

							</header>

						</div>

					</div>

				</div>

			</div>

			<div id="main1">

				<div class="main2">

					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

					<div class="row">

						<div class="12u">

							<form action="" method='post'>

									<label>Terain</label>

									<select class = "select">

										<option value = "1">Jungle</option>

										<option value = "2">Desert</option>

										<option value = "3">Vulcano</option>

										<option value = "4">Random</option>

									</select>

									<div style="text-align:center;">

										<button id="Submit" name="Submit" Value="Register" type="Submit" style="background-color:#3488CB;color:white;height:40px;width:300px; border-radius:25px;" data-component="button"> Gogogo </button>
										
										<?php
										
											if(isset($_POST['Submit'])) {

												header('Location: 9Login2ndPlayer.php');

											}
			
										?>
										
									</div>

									<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

							</form>

						</div>

					</div>

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

		<script>

		    var audio = document.getElementById("audio");

		    audio.volume = 0.05;

		</script>

	</body>

</html>