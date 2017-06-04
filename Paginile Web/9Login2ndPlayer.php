<!DOCTYPE HTML>

<?php

	include "TWVerificare.php";

	ob_start();

	error_reporting(0);

	ini_set('display_errors', 0);

	if(isset($_COOKIE['UserID'])){

		$uid = $_COOKIE["UserID"];

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

								<img src="TW_CSS/img/BomberBot.png" alt="Bomberbot" style= "width:713px;height:76px;" >

								<nav>

									<a href="2WelcomeLogat.php">Home</a>

									<a href="3TopPlayers.php" > TopPlayers </a>

									<a href="8Rules.php"> How to </a>

								</nav>

							</header>

						</div>

					</div>

				</div>

			</div>

			<div class="container">

				<div class="row main-row">

					<div class="12u">

						<section>

							<div class="formacount">

								<h2> Player 1: <?php 

													$LoggedUserName = getUserName($uid);

													echo filter($LoggedUserName);

												?>; </h2>

								<div class="form">

									<form action="" method='post'>

										<fieldset>

												<h2>Login as Player 2: </h2>

											<input type="text" name="logusername" placeholder="Username: *" required value="<?php 

																																if($LogUserName == '') 

																																	echo '';

																																else

																																	echo filter($LogUserName);

																															?>">

											<input type = "password" name = "logpassword" placeholder="Password: *" required value="<?php 

																																		if($LogPass == '')

																																			echo '';

																																		else

																																			echo filter($LogPass);

																																	?>">

										</fieldset>

										<button id="Submit" name="Submit" Value="Register" type="Submit" style="background-color:#3488CB;color:white;height:40px;width:300px; border-radius:25px;" data-component="button"> Go </button>

									</form>

								</div>

							</div>

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

	<div class="popup" onclick="myFunction()">

			<span style="color:red">

				<?php

					$LogUserName=$_POST["logusername"];

					$LogPass=$_POST["logpassword"];

					if(isset($_POST['Submit'])) {

						$rezultat = existUser($LogUserName,$LogPass);

						if($rezultat == 0){

							//echo "Username sau Parola gresita!";

							$message = "Username sau Parola gresita!";

							//echo "<strong>".'Error: '.$message.'!!!'."</strong>"."<br>";

							echo "<script type='text/javascript'>alert('$message');</script>";

							$e1 = oci_error($statement1);

							trigger_error(htmlentities($e1['message'], ENT_QUOTES), E_USER_ERROR);

						}

						else {

							$cookie_value = getID($LogUserName,$LogPass);

							$Logged = getUserLogg($cookie_value);

							if($Logged == 1) {

								$message = "Cineva este deja logat pe acest cont!";

								echo "<script type='text/javascript'>alert('$message');</script>";

							$e1 = oci_error($statement1);

							trigger_error(htmlentities($e1['message'], ENT_QUOTES), E_USER_ERROR);

							}

						}

					}

				?>

			</span>

		</div>

		<span>

			<?php

				$LogUserName=$_POST["logusername"];

				$LogPass=$_POST["logpassword"];

				if(isset($_POST['Submit'])) {

					$rezultat = existUser($LogUserName,$LogPass);

					if($rezultat == 1) {

						$cookie_value = getID($LogUserName,$LogPass);

						$Logged = getUserLogg($cookie_value);

						if($Logged == 0) {

							setPlayerOn($cookie_value);

							setcookie("UserID1", $uid,time() + (86400 * 30),'/', 'localhost');//, "/","",true);// time() + (86400 * 30), "/","",true);

							setcookie("UserID2", $cookie_value,time() + (86400 * 30),'/', 'localhost');//, "/","",true);// time() + (86400 * 30), "/","",true);  // 86400 = o zi

							header('Location: 10PreparingTheGame.php');

						}

					}

				}

			?>

		</span>


	</body>

</html>