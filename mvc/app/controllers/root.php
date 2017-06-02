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
	
	function about()
	{
		KITE::render('about');
	}
	
	function contact()
	{
		KITE::render('contact');
	}

}


?>
