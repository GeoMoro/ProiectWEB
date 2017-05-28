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

					if($rezultat == 1){

						$cookie_value = getID($LogUserName,$LogPass);

						setcookie("UserID", $cookie_value,time() + (86400 * 30),'/', 'localhost');//, "/","",true);// time() + (86400 * 30), "/","",true);  // 86400 = o zi

						//header('Location: 2WelcomeLogat.php');
                        
            $this->load->controler('rules');

					}

				}

				else

					if(isset($_POST['Submit1'])) {

						if($okUName == 1 && $okFName == 1 && $okLName && $okp == 1) {

							Register($UserName, $FirstName, $LastName, $Password_Register);

							$cookie_value = getID($UserName,$Password_Register);

							setcookie("UserID", $cookie_value,time() + (86400 * 30),'/', 'localhost');//, "/","",true);// time() + (86400 * 30), "/","",true);  // 86400 = o zi

							//header('Location: 2WelcomeLogat.php');

						}

					}

			?>

		</span>

	</body>

</html>