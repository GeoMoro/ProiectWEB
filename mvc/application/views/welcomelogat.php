		<?php $this->load->view('topmenu'); ?>
        <?php
	ob_start();

	error_reporting(0);

	ini_set('display_errors', 0);

	if(isset($_COOKIE['UserID'])){

		$uid =  $_COOKIE["UserID"];

	}

?>

        		<div class="container">

				<div class="row main-row">

					<div class="8u 12u(mobile)">

						<section class="left-content">

							<h2> Welcome, <?php 

											$LoggedUserName = getUserName($uid);

											echo filter($LoggedUserName);

										 ?>! </h2>

							<p> Glad to have you back!</p>

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

						<section class = "sidemenu">

							<h2> Main Menu </h2>

								<form action="" method='post'>

									<a href="4Jocul.php"> <button id="Submit" name="Submit1" Value="Register" type="Submit">   Play a game  </button> </a>	

									<a href="6Accoutinfo.php">  <button id="Submit" name="Submit2" Value="Register" type="Submit"> Account info </button> </a>

									<a href="7MyRobot.php">  <button id="Submit" name="Submit3" Value="Register" type="Submit"> My Robot </button> </a>	

									<button id="Submit" name="Submit" Value="Logout" type="Submit"> Logout :( </button>

								</form>

						</section>

					</div>

				</div>

			</div>
