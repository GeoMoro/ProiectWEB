<?php
/*
** KITE - A NANO PHP MVC FRAMEWORK
** Author - Krishna Teja G S
** website - packetcode.com
*/

//package - app/controller.php

// sample application class
class root
{

	function main()
	{	
		$basket = KITE::getInstance('basket');
		$model = KITE::getModel('TWVerificare');
		KITE::render('login');
		$LogUserName=$_POST["logusername"];

					$LogPass=$_POST["logpassword"];

					if(isset($_POST['Submit'])) {
						$model->existUser($LogUserName,$LogPass);
						$rezultat = $basket->existUser;

						if($rezultat == 0){

							//echo "Username sau Parola gresita!";

							$message = "Username sau Parola gresita!";

							//echo "<strong>".'Error: '.$message.'!!!'."</strong>"."<br>";

							//echo "<script type='text/javascript'>alert('$message');</script>";

							$e1 = oci_error($statement1);

							trigger_error(htmlentities($e1['message'], ENT_QUOTES), E_USER_ERROR);

						}

						else {
							$model->getID($LogUserName,$LogPass);
							$cookie_value = $basket->getID;
							$model->getUserLogg($cookie_value);
							$Logged = $basket->UserLogg;

							if($Logged == 1) {

								$message = "Cineva este deja logat pe acest cont!";

								echo "<script type='text/javascript'>alert('$message');</script>";

							$e1 = oci_error($statement1);

							trigger_error(htmlentities($e1['message'], ENT_QUOTES), E_USER_ERROR);

							}

						}

					}
		$LogUserName=$_POST["logusername"];

				$LogPass=$_POST["logpassword"];

				if(isset($_POST['Submit'])) {
					$model->existUser($LogUserName,$LogPass);
					$rezultat = $basket->existUser;

					if($rezultat == 1) {
							$model->getID($LogUserName,$LogPass);
							$cookie_value = $basket->getID;
							$model->getUserLogg($cookie_value);
							$Logged = $basket->UserLogg;

						if($Logged == 0) {

							$model->setPlayerOn($cookie_value);

							setcookie("UserID", $cookie_value,time() + (86400 * 30),'/', 'localhost');//, "/","",true);// time() + (86400 * 30), "/","",true);  // 86400 = o zi

							header('Location: welcome');

						}

					}

				}

				else

					if(isset($_POST['Submit1'])) {

						if($okUName == 1 && $okFName == 1 && $okLName == 1 && $okp == 1) {
							$model->ExistAnotherUser($UserName);
							$alreadyexistuser = $basket->AnotherUserName;

							//	echo "<div> <span>!!!!!!---".$alreadyexistuser."---???????</span> </div>";

							if($alreadyexistuser == 0) {

								$model->Register($UserName, $FirstName, $LastName, $Password_Register);
								$model->getID($UserName,$Password_Register);
								$cookie_value = $basket->getID;

								setcookie("UserID", $cookie_value, time() + (86400 * 30), '/', 'localhost');//, "/","",true);// time() + (86400 * 30), "/","",true);  // 86400 = o zi

								header('Location: welcome');

							}

							else {

								$message = "Un player deja foloseste acest UserName!";

								echo "<script type='text/javascript'>alert('$message');</script>";

								$e1 = oci_error($statement1);

								trigger_error(htmlentities($e1['message'], ENT_QUOTES), E_USER_ERROR);

							}

						}

					}
	}
	
	function login2()
	{
		KITE::render('login2');
		$basket = KITE::getInstance('basket');
		$model = KITE::getModel('TWVerificare');
		$model->getUserName($uid);
	}
	
	function welcome()
	{
		$basket = KITE::getInstance('basket');
		$model = KITE::getModel('TWVerificare');
		KITE::render('welcomelogat');
		$model->getUserName($uid);
	}

	function jocul()
	{
		KITE::render('jocul');
	}
	
	function prepare()
	{
		KITE::render('prepare');
	}
	
	function test()
	{
		KITE::render('test');
	}

	function acountinfo()
	{
		$basket = KITE::getInstance('basket');
		$model = KITE::getModel('TWVerificare');
		KITE::render('acountinfo');
		$model->getUserName($uid);
		$model->getFirstName($uid);
		$model->getLastName($uid);
	}

    function myrobot()
    { 
       
        KITE::render('myrobot');
        $basket2 = KITE::getInstance('basket');
        $model = KITE::getModel('TWVerificare');
		$model->getUserName($uid);
		$model->getRobotName($uid);
    }
	function rules()
	{
		
		KITE::render('rules');
	}

    function ruleslogat()
    { 
        $model = KITE::getModel('TWVerificare');
		
        KITE::render('ruleslogat');
		$model->getUserName($uid);
    }

	function top()
	{
		$model = KITE::getModel('TWVerificare');
		
		if(isset($_POST['Submit'])){

									$UserSearch = $_POST["searchByName"];

									//if(validUserName($UserSearch) == 1) {
										if($UserSearch == "qwerty")

											$model->getTopByName($UserSearch);

								}

								else

									if(isset($_POST['Submit1']))

									{

										$model->getTop10();

									}

									else
									{	
										$model->getTop();
									}

		KITE::render('topplayers');
	}

    function toplogat()
    { 
       
        $model = KITE::getModel('TWVerificare');
		
		if(isset($_POST['Submit'])){

									$UserSearch = $_POST["searchByName"];

									//if(validUserName($UserSearch) == 1) {
										if($UserSearch == "qwerty")

											$model->getTopByName($UserSearch);

								}

								else

									if(isset($_POST['Submit1']))

									{

										$model->getTop10();

									}

									else
									{	
										$model->getTop();
									}
        KITE::render('topplayerslogat');
		$model->getRank($uid);
    }
	private function filter($string) { // functia care va preveni atacurile de tipul XSS

		return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');

	}
	
   private function validPassword($pass) {

	    if (!ctype_alnum(str_replace('.','',str_replace('-','', str_replace('_','', str_replace('+', '', str_replace(' ', '', str_replace('@', '', str_replace('&', '', str_replace('#', '', $pass))))))))))

			return 0;

		else 

			if(strlen($pass)<5)

				return 0;

	    return 1;

   }


   private function validPass($pass1, $pass2) {

		if($pass1==$pass2)

			return 1;

		return 0;

	}


	private function validNume($p_nume) {

		if(!$p_nume)

		   return 0;

		else 

			if(!preg_match('/^[a-zA-Z ]*$/', str_replace('.','',str_replace('-','', str_replace('_','', str_replace('+', '', $p_nume))))))

				return 0;

		return 1;

	}


	private function validPremume($p_prenume) {

		if (!ctype_alpha(str_replace(' ','',str_replace('-', '', $p_prenume))))

			return 0;

		if(strlen(str_replace(' ','',str_replace('-', '', $p_prenume)))==0)

			return -1;

		return 1;

	}


	private function validUserName($p_username) {

		if (!ctype_alnum(str_replace('.','',str_replace('-','', str_replace('_','', str_replace('+', '', $p_username))))))

			return 0;

		if(strlen(str_replace('.','',str_replace('-','', str_replace('_','', str_replace('+', '', $p_username)))))<4)

			return -1;

		return 1;

	}


}


?>
