
<?php
/*
** KITE - A NANO PHP MVC FRAMEWORK
** Author - Krishna Teja G S
** website - packetcode.com
*/

//package - controllers/math.php


// A class which can perform mathematical operations

class math
{

	function main()
	{
		echo "This is Math main function";
	}
	function add()
	{
		$node = KITE::getInstance('node');
		
		$a =$b =10;
		
		if($node->get('gamma') !=null)
		$a = $node->get('gamma');
		
		if($node->get('delta') !=null)
		$b = $node->get('delta');
		
		$c = $a+$b;
		
		$basket = KITE::getInstance('basket');
		$basket->set('a',$a);
		$basket->set('b',$b);
		$basket->set('c',$c);
		KITE::render('add');
	}
	
	function subtract()
	{
		echo "this is subtract";
	}
	
	function multiply()
	{
		echo "this is multiply";
	}
}
?>