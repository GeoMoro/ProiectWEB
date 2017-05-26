<!DOCTYPE HTML>

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

								<label class="labelavatar" > Nickname: Ion.Escu</label>

								<div class="dropdown">

									<button onclick="myFunction()" class="dropbtn">Change Username</button>

									<div id="myDropdown" class="dropdown-content">

										<form>

											<fieldset>

												<input type="text" name="username" placeholder="Username *">

												<input type="submit" value="Apply" />

											</fieldset>

										</form>

									</div>

								</div>

								<br><br><br>

								<label class="labelacount"> First Name: Ion</label>		

								<br>

								<label class="labelacount"> Last Name: Escu</label>

								<br>

								<div class="dropdown2">

									<button onclick="myFunction2()" class="dropbtn">Change password</button>

									<div id="myDropdown2" class="dropdown-content2">

										<form>

											<fieldset>

												<input type="password" name="old_password" placeholder="Old password *">

												<input type="password" name="password" placeholder="New password *">

												<input type="password" name="confirm_password" placeholder="Confirm new password *">

												<input type="submit" value="Apply" />

											</fieldset>

										</form>

									</div>

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

		<script>
			/* When the user clicks on the button, 
			toggle between hiding and showing the dropdown content */
			function myFunction() {
				document.getElementById("myDropdown").classList.toggle("show");
			}
			function myFunction2() {
				document.getElementById("myDropdown2").classList.toggle("show");
			}
			// Close the dropdown if the user clicks outside of it
			//window.onclick = function(event) {
				//if (!event.target.matches('.dropbtn')) {
				//	var dropdowns = document.getElementsByClassName("dropdown-content");
				//	var i;
				//	for (i = 0; i < dropdowns.length; i++) {
				//		var openDropdown = dropdowns[i];
				//		if (openDropdown.classList.contains('show')) {
				//			openDropdown.classList.remove('show');
				//		}
				//	}
				//}
				//if (!event.target.matches('.dropbtn2')) {
				//	var dropdowns = document.getElementsByClassName("dropdown-content2");
				//	var i;
				//	for (i = 0; i < dropdowns.length; i++) {
				//		var openDropdown = dropdowns[i];
				//		if (openDropdown.classList.contains('show')) {
				//			openDropdown.classList.remove('show');
				//		}
				//	}
				//}
			//}
        </script>

	</body>

</html>