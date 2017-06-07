<!DOCTYPE HTML>

<html lang="en">

	<head>

		<title>Welcome Nelogat</title>

		<link rel="stylesheet" href="http://localhost:8181/kite/assets/css/main.css" />

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

							    <img src="http://localhost:8181/kite/assets/img/BomberBot.png" alt="Bomberbot" style= "width:713px;height:76px;" >
 

								<nav>

									<a href="root/main" class="current-page-item"> Home </a>

									<a href="top" > TopPlayers </a>

									<a href="rules"> How to </a>

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

									<a href="https://www.facebook.com/vicol.robert"><img src="http://localhost:8181/kite/assets/img/robert.jpg" id="pozefb" alt="" class="left"/> </a>

									<h3>Vicol Robert Ilie</h3>

									<p>One lazy guy that brings the f/pun to the table</p>

								</li>

								<li>

									<a href="https://www.facebook.com/mazilu.georgeviorel"><img src="http://localhost:8181/kite/assets/img/mazi.jpg" id="pozefb" alt="" class="left"/> </a>

									<h3>Mazilu George-Viorel</h3>

									<p>Likes to get it over with as soon as possible</p>

								</li>

								<li>

									<a href="https://www.facebook.com/georgecosmin.morosanu"><img src="http://localhost:8181/kite/assets/img/juan.jpg" id="pozefb" alt="" class="left"/> </a>

									<h3>Morosanu George-Cosmin</h3>

									<p>Your favorite mexican</p>

								</li>

								<li>

									<a href="https://www.facebook.com/minuti.vlad"><img src="http://localhost:8181/kite/assets/img/vlad.jpg" id="pozefb" alt="" class="left"/> </a>

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

									<span id="spancolorred"> 

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

									<span id="spancolorred"> 

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

									<span id="spancolorred"> 

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

									<span id="spancolorred">

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

			<span id="spancolorred">

				<?php

					

				?>

			</span>

		</div>

		<span>

			<?php

				

			?>

		</span>

	</body>

</html>