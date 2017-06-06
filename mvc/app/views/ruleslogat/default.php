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

								<img src="http://localhost/kite/assets/img/BomberBot.png" alt="Bomberbot" style= "width:713px;height:76px;" >
 

								<nav>

									<a href="welcome" >Home</a>

									<a href="toplogat" > TopPlayers </a>

									<a href="ruleslogat" class="current-page-item"> How to </a>

								</nav>

							</header>

						</div>

					</div>

				</div>

			</div>


			<div class="container">	

				<section class="left-content">

					<h2>Hello, <?php 

								$basket = KITE::getInstance('basket');

									echo $basket->UserName;

							   ?>!</h2>

					<p>So you're new here!</p>

					<p>Ok! It's time for you to find out something about this little game!</p>

					<p>The main objective of the game is to remain the last robot alive (unless it’s a team game, of course). Depending on what you choose, you have to play against one (or more) other player(s), and your purpose is to vanquish their robots by putting normal bombs (or other weapons like advanced bombs, mines ...) on the ground and waiting for them to explode, hoping they're going to damage the others.</p>

					<p>Once you're logged in, you have to go into "My robot" and design your own unique robot. Otherwise, you will only own the default version of it, made (with love) by us. The default robot is made of wood, so you can imagine, it won’t be the best bombing machine. However, by playing you can unlock several perks and materials, which you can later buy to design your own robot in a way that suits your playstyle. Don’t worry if you don’t yet know what that playstyle is, it only take a few hours for you to figure it out!</p>

					<p>During the starting phase, you have 1000 coins, which you can spend on upgrades for your Robot (better armor or abilities like speed/pushing the bombs) or better weapons (long ranged bombs/mines).</p>

					<p>When the game ends, if you lose, your rank will decrease by 25 points. But if you win/draw that game, your rank will be improved by 50 points. A game is considered a draw when the last robots alive are destroyed at the same time (provided that these last robots are on opposing teams). Also, if the time runs out of time, then that game is considered a draw.</p>

					<p>Your rank will be always at least 0.</p>

					<p>If you have any questions about the game, feel free to send a message to our email adress BomberBot@gmail.com</p>

					<p>Have fun!</p>

					<p>BomberBot team</p>

				</section>

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