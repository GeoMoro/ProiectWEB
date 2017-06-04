<!DOCTYPE HTML>

<?php

	ob_start();

	error_reporting(0);

	ini_set('display_errors', 0);

	if(isset($_COOKIE['UserID'])){

		$uid =  $_COOKIE["UserID"];

	}

?>

<html lang="en">

	<head>

		<title>Welcome-logat</title>

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

								<img src="http://localhost/kite/assets/img/BomberBot.png" alt="Bomberbot" style= "width:713px;height:90px;" >

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

			<div class="container">

				<div class="row main-row">

					<div class="8u 12u(mobile)">

						<section class="left-content">

							<h2> Welcome, <?php 

											//$LoggedUserName = getUserName($uid);

											//echo filter($LoggedUserName);

										 ?>! </h2>

							<p> Glad to have you back!</p>

							<h2> More about us: </h2>

							<p> This started out as a collage project, with a random team made on the fly. But we got ourself together and made it happen. Must we admit, we ourself play it to this day. </p>

							<p> Now it's about time that you get to know who we are:</p>

							<ul class="small-image-list">

								<li>

									<a href="https://www.facebook.com/vicol.robert"><img src="http://localhost/kite/assets/img/robert.jpg" style= "width:85px;height:85px;" alt="" class="left"/> </a>

									<h3>Vicol Robert Ilie</h3>

									<p>One lazy guy that brings the f/pun to the table</p>

								</li>

								<li>

									<a href="https://www.facebook.com/mazilu.georgeviorel"><img src="http://localhost/kite/assets/img/mazi.jpg" style= "width:85px;height:85px;" alt="" class="left" /></a>

									<h3>Mazilu George-Viorel</h3>

									<p>Likes to get it over with as soon as possible</p>

								</li>

								<li>

									<a href="https://www.facebook.com/georgecosmin.morosanu"><img src="http://localhost/kite/assets/img/juan.jpg" style= "width:85px;height:85px;" alt="" class="left" /></a>

									<h3>Morosanu George-Cosmin</h3>

									<p>Your favorite mexican</p>

								</li>

								<li>

									<a href="https://www.facebook.com/minuti.vlad"><img src="http://localhost/kite/assets/img/vlad.jpg" style= "width:85px;height:85px;" alt="" class="left" /></a>

									<h3>Minuti Vladut-Stefan</h3>

									<p>Has no idea what's going on</p>

								</li>

							</ul>

						</section>

					</div>

					<div class="4u 12u(mobile)">

						<section class = "sidemenu">

							<h2> Main Menu </h2>

								<form action="" method='post'>

									<a href="jocul"> <button id="Submit" name="Submit1" Value="Register" type="Submit">   Play a game  </button> </a>	

									<a href="acountinfo">  <button id="Submit" name="Submit2" Value="Register" type="Submit"> Account info </button> </a>

									<a href="myrobot">  <button id="Submit" name="Submit3" Value="Register" type="Submit"> My Robot </button> </a>	

									<a href="main"> <button id="Submit" name="Submit" Value="Register" type="Submit"> Logout :( </button> </a>

								</form>

						</section>

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

	</body>

	<?php

		if(isset($_POST['Submit'])) {
			
			//setPlayerOff($uid);

			setcookie("userID", "", time() - 3600);

			header('Location: main');

		}

		else 

			if(isset($_POST['Submit1'])) {

				setcookie("userID", "", time() - 3600);

				header('Location: jocul');

			}

			else

				if(isset($_POST['Submit2'])) {

				setcookie("userID", "", time() - 3600);

				header('Location: acountinfo');

				}

				else 

					if(isset($_POST['Submit3'])) {

						setcookie("userID", "", time() - 3600);

						header('Location: myrobot');

					}

	?>

</html>