<!DOCTYPE HTML>

<html lang="en">

	<head>

		<title>Welcome Nelogat</title>

		<link rel="stylesheet" href="http://localhost/kite/assets/css/main.css" />

	</head>

	<body>

		<?php

			ob_start();

			error_reporting(0);

			ini_set('display_errors', 0);

			$LogUserName=$_POST["logusername"];

			$LogPass=$_POST["logpassword"];

			$LastName=$_POST["last_name"];

			$FirstName=$_POST["first_name"];

			$UserName=$_POST["username"];

			$Password_Register=$_POST["passwordRegister"];

			$Confirm_Password_Register=$_POST["confirm_passwordRegister"];

		?>

		<div id="page-wrapper">

			<div id="header-wrapper">

				<div class="container">

					<div class="row">

						<div class="12u">

							<header id="header">

							    <img src="http://localhost/kite/assets/img/BomberBot.png" alt="Bomberbot" style= "width:713px;height:90px;" >

								<nav>

									<a href="root" class="current-page-item"> Home </a>

									<a href="3'TopPlayers.php" > TopPlayers </a>

									<a href="rules"> How to </a>

								</nav>

							</header>

						</div>

					</div>

				</div>

			</div>

    <div class="container">


        <?php KITE::app() ?>


    </div><!-- /.container -->


  </body>
</html>
