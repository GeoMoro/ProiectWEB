<!DOCTYPE HTML>

<html lang="en">

	<head>

		<title>Welcome Nelogat</title>
	
		<meta charset="utf-8" />
	
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	
		<link rel="stylesheet" href="main.css" />

	</head>

	<body>

		<?php

			include "TWVerificare.php";

			session_start();

			error_reporting(0);

			ini_set('display_errors', 0);

			$LogUserName=$_POST["logusername"];

			$LogPass=$_POST["logpassword"];

			$ConfirmPassword=$_Post["confirm_password"];

			$Password=$_POST["password"];

			$SecondName=$_POST["second_name"];

			$FirstName=$_POST["first_name"];

			$UserName=$_POST["username"];

		?>

		<div id="page-wrapper">

			<div id="header-wrapper">
	
				<div class="container">

					<div class="row">

						<div class="12u">

							<header id="header">

							    <img src="TW_CSS/img/BomberBot.png" alt="Bomberbot" style= "width:713px;height:90px;" >

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

							<p>beloved childhood game "Bomberman".</p> <hr>

							<p>  Special about Bomberbot, is that you can play it online!</p>

							<p>Yeah, that's right, you can play it right here, on your brownswer. No instalattion required, no pluggins, no boring stuff. It doesn't matter how old your device is. Just log in or join us if you haven't yet and enjoy yourself! </p>

							<h2> More about us: </h2>

							<p> This started out as a collage project, with a random team made on the fly. But we got ourself together and made it happen. Must we admit, we ourself play it to this day. </p>

							<p>Now it's about time that you get to know who we are:</p>

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

									<legend><span class="number">1</span> Login</legend>

									<input type="text" name="logusername" placeholder="username: " required  value="<?php 
																														if($LogUserName == '') 
																															echo '';
																														else
																															echo $LogUserName;
																													?>">

									<input type = "password" name = "logpassword" placeholder="password: " required  value="<?php 
																																if($LogPass == '') 
																																	echo '';
																																else
																																	echo $LogPass;
																															?>">

								</fieldset>

								<button id="Submit" name="Submit" Value="Register" type="Submit" style="background-color:#3488CB;color:white;height:40px;width:300px; border-radius:25px;" data-component="button"> Go </button>

							</form>

						</div>

						<hr> Or if you don't have an account yet, you can... <hr>

						<div class="form">

							<form action="" method='post'>	

								<fieldset>

									<legend><span class="number">2</span> Sign Up Now!</legend>
										
									<input type="text" name="username" placeholder="Username *" >

									<?php
										if(isset($_POST['Submit1'])) {
										    $UserName=$_POST["username"];
										}
									?>

									<input type="text" name="first_name" placeholder="First Name *" >

									<?php
										if(isset($_POST['Submit1'])) {
										    $FirstName=$_POST["first_name"];
										}
									?>

									<input type="text" name="second_name" placeholder="Second Name *" >

									<?php
										if(isset($_POST['Submit1'])) {
										    $SecondName=$_POST["second_name"];
										}
									?>

									<input type="password" name="passwordRegister" placeholder="Password *" >

									<input type="password" name="confirm_passwordRegister" placeholder="Confirm password *" >

									<span style="color:red">

										<?php
											if(isset($_POST['Submit1'])) {
												$Password_Register=$_POST["passwordRegister"];
												//$okPass = 1;
												$Confirm_Password_Register=$_POST["confirm_passwordRegister"];
												//$okPass = validPass($Password,$ConfirmPassword);
												if($Password_Register == $Confirm_Password_Register)
													echo "";
												else
													echo "Parolele nu corescund!";
											}
										?>

									</span>

								</fieldset>

								<button id="Submit1" name="Submit1" Value="Register1" type="Submit1" style="background-color:#3488CB;color:white;height:40px;width:300px; border-radius:25px;" data-component="button"> Register </button>

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

						echo "<strong>".'Ai introdus: '.$LogUserName.'  '.$LogPass.' '.$rezultat.'!!!'."</strong>"."<br>";

						if($rezultat == 1){

						//	$linklogin='2WelcomeLogat.php';
							
						//	redirect($linklogin,$statusCode = 303);
							
							//header('Location: 2WelcomeLogat.php');

							//exit;

							//echo "<a target = '_blank' href=2Welcome-Logat.php >open</a>";

							session_register("UserSession");

							$_SESSION['login_user'] = $myusername;

							header("location: 2WelcomeLogat.php");

						}

						if($rezultat == 0){

							//echo "Username sau Parola gresita!";

							$message = "Username sau Parola gresita!";

							//echo "<strong>".'Error: '.$message.'!!!'."</strong>"."<br>";

							echo "<script type='text/javascript'>alert('$message');</script>";

							$e1 = oci_error($statement1);

							trigger_error(htmlentities($e1['message'], ENT_QUOTES), E_USER_ERROR);

						}

					}

					//if(isset($_POST['Submit1'])) {

					    //if($okPass==1 && )

					//}

				?>

			</span>

		</div>

		<!--<div>
		  <span>
			<?php
				echo "?".$Confirm_Password_Register."!!!".$Password_Register."?";
			?>
		  </span>
		</div> -->
	</body>

</html>