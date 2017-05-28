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

			<div class="form">

				<div class="row">

					<div class="12u">

						<form>

							<label>Type : 1VS1</label>

								<label>Terain</label>

								<select class = "select">

									<option value = "1">Jungle</option>

									<option value = "2">Desert</option>

									<option value = "3">Vulcano</option>

									<option value = "4">Random</option>

								</select>

								<input type="submit" value="Start" />

						</form>

					</div>

				</div>

			</div>

			<div class="container">

				<img src="TW_CSS/img/bomberman.jpg" alt="Bomberman" style= "width:75%; height:75%;" />

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