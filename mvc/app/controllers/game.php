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

}


?>
