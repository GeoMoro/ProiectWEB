<!DOCTYPE HTML>

<?php


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

		<link rel="stylesheet" href="http://localhost:8181/kite/assets/css/main.css"/>

	</head>

	<body>

		<audio autoplay id="audio">

			<source src="http://localhost:8181/kite/assets/img/Music.mp3" type="audio/mpeg">

		</audio>

		<div id="page-wrapper">

			<div id="header-wrapper">

				<div class="container">

					<div class="row">

						<div class="12u">

							<header id="header">

								<img src="http://localhost:8181/kite/assets/img/BomberBot.png" alt="Bomberbot" style= "width:713px;height:76px;" >
 

								<nav>

									<a href="welcome">Home</a>

									<a href="toplogat" class="current-page-item" > TopPlayers </a>

									<a href="ruleslogat"> How to </a>

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

									<div id="centrat">

									 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp	 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

									<button id="Submit" name="Submit" Value="Register" type="Submit" style=" font-size:35px;background-color:#00e6e6;color:red;height:15%;width:15%; border-radius:25px; " data-component="button"> Start! </button>

										<?php

											if(isset($_POST['Submit'])) {

												header('Location: login2');

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

		    audio.volume = 0.15;

		</script>

	</body>

</html>