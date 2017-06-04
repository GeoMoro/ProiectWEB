<!DOCTYPE HTML>

<html lang="en">

	<head>

		<title>Welcome Nelogat</title>

		<link rel="stylesheet" href="TW_CSS/css/main.css" />

	</head>

	<body>

		<?php

			include "TWVerificare.php";

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

							    <img src="TW_CSS/img/BomberBot.png" alt="Bomberbot" style= "width:713px;height:76px;" >

								<nav>

									<a href="1WelcomeNelogat.php" class="current-page-item"> Home </a>

									<a href="3'TopPlayers.php" > TopPlayers </a>

									<a href="8'Rules.php"> How to </a>

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

							<h2>Welcome, guest! </h2>

							<p> As far as you probably figured it out, we made here a new platform for playing your  </p>

							<p> beloved childhood game "Bomberman".</p> <hr>

							<p> Special about Bomberbot, is that you can play it online!</p>

							<p> Yeah, that's right, you can play it right here, on your brownswer. No instalattion required, no pluggins, no boring stuff. It doesn't matter how old your device is. Just log in or join us if you haven't yet and enjoy yourself! </p>

							<h2> More about us: </h2>

							<p> This started out as a collage project, with a random team made on the fly. But we got ourself together and made it happen. Must we admit, we ourself play it to this day. </p>

							<p> Now it's about time that you get to know who we are:</p>

							<ul class="small-image-list">

								<li>

									<a href="https://www.facebook.com/vicol.robert"><img src="TW_CSS/img/robert.jpg" style= "width:85px;height:85px;" alt="" class="left"/> </a>

									<h3>Vicol Robert Ilie</h3>

									<p>One lazy guy that brings the f/pun to the table</p>

								</li>

								<li>

									<a href="https://www.facebook.com/mazilu.georgeviorel"><img src="TW_CSS/img/mazi.jpg" style= "width:85px;height:85px;" alt="" class="left" /></a>

									<h3>Mazilu George-Viorel</h3>

									<p>Likes to get it over with as soon as possible</p>

								</li>

								<li>

									<a href="https://www.facebook.com/georgecosmin.morosanu"><img src="TW_CSS/img/juan.jpg" style= "width:85px;height:85px;" alt="" class="left" /></a>

									<h3>Morosanu George-Cosmin</h3>

									<p>Your favorite mexican</p>

								</li>

								<li>

									<a href="https://www.facebook.com/minuti.vlad"><img src="TW_CSS/img/vlad.jpg" style= "width:85px;height:85px;" alt="" class="left" /></a>

									<h3>Minuti Vladut-Stefan</h3>

									<p>Has no idea what's going on</p>

								</li>

							</ul>

						</section>

					</div>

					<div class="4u 12u(mobile)">

						<div class="form">

							<form action="" method='post'>

								<fieldset>

									<legend>

										<span class="number">1</span> Login

									</legend>

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

						<hr> Or if you don't have an account yet, you can... <hr>

						<div class="form">

							<form action="" method='post'>	

								<fieldset>

									<legend>

										<span class="number">2</span> Sign Up Now!

									</legend>

									<h6 href="#" data-toggle="popover" title="<?php echo 'Username must have at least four alpha-numeric characters.'.PHP_EOL.'  You can use also the characters: \'-\', \'_\', \'+\' and \'.\';'.PHP_EOL.'First name and last name must contain only alpha-numeric characters, with \' \' and \'-\';'.PHP_EOL.'Password must have at least 5 characters, and here is allowed alphanumeric characters and \'.\', \'-\', \'_\', \'+\, \' \', \'@\', \'&\' and \'#\'.';?>">Info</h6>

									<br>

									<span style="color:red"> 

										<?php

											if(isset($_POST['Submit1'])) {

												$UserName=$_POST["username"];

												if(validUserName($UserName) == 0) {

													echo 'Invalid Username!';

													$okUName = 0;

												}

												else

													if(validUserName($UserName) == -1) {

														echo 'At least 4 characters!';

														$okUName = 0;

													}

													else {

														echo '';

														$okUName = 1;

													}

											}

										?>

									</span>

									<input type="text" name="username" placeholder="Username *" required value="<?php 

																													if($UserName == '')

																														echo '';

																													else

																														echo filter($UserName);

													 															?>">

									<span style="color:red"> 

										<?php

											if(isset($_POST['Submit1'])) {

												$FirstName=$_POST["first_name"];

												if(validPremume($FirstName) == 0) {

													echo 'Invalid Name!';

													$okFName = 0;

												}

												else

													if(validPremume($FirstName) == -1) {

														echo 'You must have a name, bro!';

														$okFName = 0;

													}

													else {

														echo '';

														$okFName = 1;

													}

											}

										?>

									</span>

									<input type="text" name="first_name" placeholder="First Name *" required value="<?php 

																														if($FirstName == '')

																															echo '';

																														else

																															echo filter($FirstName);

																													?>">

									<?php

										if(isset($_POST['Submit1'])) {

										    $FirstName=$_POST["first_name"];

										}

									?>

									<span style="color:red"> 

										<?php

											if(isset($_POST['Submit1'])) {

												$LastName=$_POST["last_name"];

												if(validPremume($LastName) == 0) {

													echo 'Invalid Name!';

													$okLName = 0;

												}

												else

													if(validPremume($LastName) == -1) {

														echo 'You must have a name, bro!';

														$okLName = 0;

													}

													else {

														echo '';

														$okLName = 1;

													}

											}

										?>

									</span>

									<input type="text"  name="last_name"  placeholder="Last Name *" required value="<?php 

																														if($LastName == '') 

																															echo '';

																														else

																															echo filter($LastName);

																													?>">

									<?php

										if(isset($_POST['Submit1'])) {

										    $LastName=$_POST["last_name"];

										}

									?>

									<span style="color:red">

										<?php

											if(isset($_POST['Submit1'])) {

												$Password_Register=$_POST["passwordRegister"];

												$Confirm_Password_Register=$_POST["confirm_passwordRegister"];

												if(validPassword($Password_Register) == 0 || validPassword($Confirm_Password_Register) == 0) {

													echo "Parole Invalide!";

													$okp = 0;

												}

												else

													if($Password_Register == $Confirm_Password_Register) {

														echo "";

														$okp = 1;

													}

													else {

														echo "Parolele nu corescund!";

														$okp = 0;

													}

											}

										?>

									</span>

									<input type="password" name="passwordRegister" placeholder="Password *" required value="<?php 

																																if($Password_Register == '') 

																																	echo '';

																																else

																																	echo filter($Password_Register);

																															?>">

									<input type="password" name="confirm_passwordRegister" placeholder="Confirm password *" required value="<?php 

																																				if($Confirm_Password_Register == '') 

																																					echo '';

																																				else

																																					echo filter($Confirm_Password_Register);

																																			?>">

								</fieldset>

								<button id="Submit" name="Submit1" Value="Register" type="Submit" style="background-color:#3488CB;color:white;height:40px;width:300px; border-radius:25px;" data-component="button"> Register </button>

						    </form>

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

							setcookie("UserID", $cookie_value,time() + (86400 * 30),'/', 'localhost');//, "/","",true);// time() + (86400 * 30), "/","",true);  // 86400 = o zi

							header('Location: 2WelcomeLogat.php');

						}

					}

				}

				else

					if(isset($_POST['Submit1'])) {

						if($okUName == 1 && $okFName == 1 && $okLName == 1 && $okp == 1) {

							$alreadyexistuser = ExistAnotherUser($UserName);

							//	echo "<div> <span>!!!!!!---".$alreadyexistuser."---???????</span> </div>";

							if($alreadyexistuser == 0) {

								Register($UserName, $FirstName, $LastName, $Password_Register);

								$cookie_value = getID($UserName,$Password_Register);

								setcookie("UserID", $cookie_value, time() + (86400 * 30), '/', 'localhost');//, "/","",true);// time() + (86400 * 30), "/","",true);  // 86400 = o zi

								header('Location: 2WelcomeLogat.php');

							}

							else {

								$message = "Un player deja foloseste acest UserName!";

								echo "<script type='text/javascript'>alert('$message');</script>";

								$e1 = oci_error($statement1);

								trigger_error(htmlentities($e1['message'], ENT_QUOTES), E_USER_ERROR);

							}

						}

					}

			?>

		</span>

	</body>

</html>