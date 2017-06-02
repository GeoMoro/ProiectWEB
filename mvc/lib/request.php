<?php
/*
** KITE - A NANO PHP MVC FRAMEWORK
** Author - Krishna Teja G S
** website - packetcode.com
*/

//package - lib/request.php

//stores the request parameters to request object

class request{


	public function __construct()
	{
		foreach($_REQUEST as $key => $value)
			$this->$key= $value;
	}

	function get($key)
	{
		if(isset($this->$key))
			return $this->$key;
		else
			return null;
	}
	
}