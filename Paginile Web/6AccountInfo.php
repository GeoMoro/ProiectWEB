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

		<title>Accout Info</title>

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

								<img src="TW_CSS/img/BomberBot.png" alt="Bomberbot" style= "width:713px;height:90px;" >

								<nav>

									<a href="2WelcomeLogat.php">Home</a>

									<a href="3TopPlayers.php" class="current-page-item" > TopPlayers </a>

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

								<h3> Acount Info</h3>

								<br><br>

								<label class="labelavatar" > Nickname:  <?php

																			$LoggedUserName = getUserName($uid);

																			echo $LoggedUserName;

																	   ?></label>

								<div class="dropdown">

									<button onclick="myFunction()" class="dropbtn">Change Username</button>

									<div id="myDropdown" class="dropdown-content">

										<form action="" method='post'>

											<fieldset>

												<input type="text" name="username" placeholder="Username *">

												<button id="Submit" name="Submit1" Value="ApplyChangePass" type="Submit"> Apply </button>

											</fieldset>

										</form>

									</div>

									<span style="color:red"> 

										<?php

											if(isset($_POST['Submit1'])) {

												$username = $_POST["username"];

												$real_username = getUserName($uid);

												if(validUserName($username) == 0) {

													echo 'Ai introdus un username gresit!';

												}

												else 

													if($username == $real_username) {

														echo 'Trebuie sa introduci un username diferit de cel vechi!';

													}

													else {

														echo '';

														UpdateUserName($uid,$username);

														setcookie("UserID", $uid,time() + (86400 * 30),'/', 'localhost');//, "/","",true);// time() + (86400 * 30), "/","",true);  // 86400 = o zi

														header('Location: 6AccountInfo.php');

													}

											}

										?>

									</span>

								</div>

								<br><br><br>

								<label class="labelacount"> First Name: <?php

																			$LoggedFirstName = getFirstName($uid);

																			echo $LoggedFirstName;

																		 ?></label>		

								<br>

								<label class="labelacount"> Last Name: <?php

																			$LoggedLasttName = getLastName($uid);

																			echo $LoggedLasttName;

																		 ?></label>

								<br>

								<div class="dropdown2">

									<button onclick="myFunction2()" class="dropbtn">Change password</button>

									<div id="myDropdown2" class="dropdown-content2">

										<form action="" method='post'>

											<fieldset>

												<input type="password" name="old_password" placeholder="Old password *">

												<span style="color:red"> 

													<?php

														if(isset($_POST['Submit2'])) {

															$Old_pass=$_POST["old_password"];

															$Real_Pass = getUserPass($uid);

															if(validPass($Old_pass,$Real_Pass) == 0) {

																echo 'Parolele nu corespund!';

																$okUCheckPass = 0;

															}

															else {

																	echo '';

																	$okUCheckPass = 1;

																}

														}

													?>

												</span>

												<input type="password" name="password" placeholder="New password *">

												<input type="password" name="confirm_password" placeholder="Confirm new password *">

												<span style="color:red"> 

													<?php

														if(isset($_POST['Submit2'])) {

															$New_Pass = $_POST["password"];

															$New_Pass_Check = $_POST["confirm_password"];

															if( validPassword($New_Pass)==0  || validPassword($New_Pass_Check)==0) {

																echo 'Parole invalide!';

																$okUCheckNewPass = 0;

															}

															else

																if(validPass($New_Pass,$New_Pass_Check) == 0) {

																	echo 'Parolele nu corespund!';

																	$okUCheckNewPass = 0;

																}

																else

																	if(validPass($New_Pass,$Old_pass)==1){

																		echo 'Trebuie sa introduci o parola diferita de cea veche!';

																		$okUCheckNewPass = 0;

																	}

																	else {

																		echo '';

																		$okUCheckNewPass = 1;

																	}

														}

													?>

												</span>

												<button id="Submit" name="Submit2" Value="ApplyChangePass" type="Submit"> Apply </button>

											</fieldset>

										</form>

									</div>

									<span style="color:red"> 

										<?php

											if(isset($_POST['Submit2'])) {

												if($okUCheckNewPass == 0  || $okUCheckPass == 0) {

													echo 'Ai introdus gresit un camp!';

												}

												else {

													echo '';

													UpdatePass($uid,$New_Pass);

													setcookie("UserID", $uid,time() + (86400 * 30),'/', 'localhost');//, "/","",true);// time() + (86400 * 30), "/","",true);  // 86400 = o zi

													header('Location: 6AccountInfo.php');

												}

											}

										?>

									</span>

								</div>

								<br><br><br>

								<label class="labelavatar"> Avatar:</label>

								<img src="TW_CSS/img/avatar.png" alt="Avatar" style= "width:100px;height:100px;" >

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

	</body>

</html>