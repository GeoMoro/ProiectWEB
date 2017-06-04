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
		KITE::render('login');
	}
	
	function login2()
	{
		KITE::render('login2');
	}
	
	function welcome()
	{
		KITE::render('welcomelogat');
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
		KITE::render('acountinfo');
	}

    function myrobot()
    { 
       
        $basket2 = KITE::getInstance('basket');
        $model = KITE::getModel('TWVerificare');
        $id=$basket2->UserId;
		$model->getUserName($id);
        KITE::render('myrobot');
    }
	function rules()
	{
		
		KITE::render('rules');
	}

    function ruleslogat()
    { 
        $model = KITE::getModel('TWVerificare');
		$model->getUserName($id);
        KITE::render('ruleslogat');
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
    }
}


?>
