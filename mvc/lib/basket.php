<?php
/*
** KITE - A NANO PHP MVC FRAMEWORK
** Author - Krishna Teja G S
** website - packetcode.com
*/

//package - lib/basket.php

// A class which holds the data to the view

class basket{


	function set($key,$value)
	{
		//$this->alpha = math
		$this->$key = $value;
	}
	
	function get($key)
	{
		if(isset($this->$key))
			return $this->$key;
		else
			return null;
	}
	

}
?>