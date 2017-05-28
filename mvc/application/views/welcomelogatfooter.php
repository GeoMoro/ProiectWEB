
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

			setcookie("userID", "", time() - 3600);

			header('Location: 1WelcomeNelogat.php');

		}

		else 

			if(isset($_POST['Submit1'])) {

				setcookie("userID", "", time() - 3600);

				header('Location: 4Jocul.php');

			}

			else

				if(isset($_POST['Submit2'])) {

				setcookie("userID", "", time() - 3600);

				header('Location: 6AccountInfo.php');

				}

				else 

					if(isset($_POST['Submit3'])) {

						setcookie("userID", "", time() - 3600);

						header('Location: 7MyRobot.php');

					}

	?>

</html>