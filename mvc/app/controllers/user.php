
<?php
/*
** KITE - A NANO PHP MVC FRAMEWORK
** Author - Krishna Teja G S
** website - packetcode.com
*/

//package - controllers/math.php


// A class which will display user infromation

class User
{

	function main()
	{
		echo "This is User main function";
	}
	function recent()
	{
		echo "this recent users are teja,raja,ramesh";
	}
	
	function lists()
	{
		$model = KITE::getModel('usermodel');
		$model->getusers();
		KITE::render('userlist');
	}
	
	function wall()
	{
		$model = KITE::getModel('usermodel');
		$model->getWall();
		
		$request = KITE::getInstance('request');
		if(isset($request->message))
		{
			$model->postMessage();
			$model->getWall();
		}
		KITE::render('wall');
	}
}
?>