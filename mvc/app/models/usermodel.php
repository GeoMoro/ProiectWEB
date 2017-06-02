<?php
/*
** KITE - A NANO PHP MVC FRAMEWORK
** Author - Krishna Teja G S
** website - packetcode.com
*/

//package - app/models/usermodel.php

//This is used to intereact with database

class usermodel{

	function getusers()
	{
		$pdo = KITE::getInstance('pdo');
		$stmt = $pdo->query("SELECT * FROM users");
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		$basket = KITE::getInstance('basket');
		foreach ($result as $key => $value)
		$basket->set($value['id'],$value['name']);
		
	}
	
	
	function getWall()
	{
		$pdo = KITE::getInstance('pdo');
		$stmt = $pdo->query("SELECT * FROM wall ORDER BY id desc");
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		$basket = KITE::getInstance('basket');
		foreach ($result as $key => $value)
		$basket->set($key,$value);

		
	}
	
	function postMessage()
	{
		$request = KITE::getInstance('request');
		
		$name = $request->get('name');
		$message = $request->get('message');
		
		$pdo = KITE::getInstance('pdo');
		$pdo->exec("INSERT INTO wall(name,message) VALUES('$name','$message')");
		
	}

}
?>