<!DOCTYPE HTML>

<html lang="en">

	<head>

		<title>MyRobot</title>

		<meta charset="utf-8" />

		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="TW_CSS/css/main.css" />

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

									<a href="2WelcomeLogat.php" > Home </a>

									<a href="3TopPlayers.php" > TopPlayers </a>

									<a href="8Rules.php" > How to </a>

								</nav>

							</header>

						</div>

					</div>

				</div>

			</div>	

		    <div id="main1">

				<div class="main2">

					<br><br>

					<h2>My Robot</h2>

					<br><br>

					<h3>Robot's Name:&nbsp;&nbsp;<input type="text" placeholder="John Cenaitor" name="CurrentName" id="ChangeRobot">&nbsp;&nbsp;&nbsp;<a href="7MyRobot.php" >change?</a></h3>

					<br>

					<h3>Material :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

						<select class = "select">

							<option value = "1">WOOD-Basic</option>

							<option value = "2">STONE-Basic</option>

							<option value = "3">SILVER</option>

							<option value = "4">STEEL</option>

							<option value = "5">GOLD</option>

							<option value = "6">DIAMOND</option>

							<option value = "7">PLATINUM</option>

							<option value = "8">OBSIDIAN</option>

						</select>

						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					</h3>

					<br>

					<h3>Bomb's Type:&nbsp;&nbsp;&nbsp;

						<select class = "select">

							<option value = "1">Normal Bombs(3 ranged)</option>

							<option value = "2">Long Ranged Bombs(5 ranged)</option>

							<option value = "3">Poison Bombs(3 ranged)</option>

							<option value = "4">Proximity Mine(1x1 ranged)</option>

							<option value = "5">Rocket Launcher(7 ranged 1 way)</option>

						</select>

						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					</h3>

					<br>

					<h3>Tool : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

						<select class = "select">

							<option value = "1">Guardian(+1 life)</option>

							<option value = "2">JetPack(jump over obstacles)</option>

							<option value = "3">Detonator</option>

							<option value = "4">Kick(Push the bomb trough 1 obstacle)</option>

							<option value = "5">Slide(Push the bomb trough the wall)</option>

							<option value = "6">Invisibility</option>

							<option value = "7">Redbull(+Speed)</</option>

						</select>

						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					</h3>

					<section class = "topmenu1">

						<a href="4Jocul.php"> 

							<button> Play a game </button> 

						</a>

					</section>

					<br><br><br><br><br><br><br><br><br><br>

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

		<script>

		    var audio = document.getElementById("audio");

		    audio.volume = 0.05;

		</script>

	</body>

</html>