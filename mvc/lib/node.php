<?php
/*
** KITE - A NANO PHP MVC FRAMEWORK
** Author - Krishna Teja G S
** website - packetcode.com
*/

//package - lib/node.php

// A class which deals with URL fragments
// and they are named as alpha,beta,gamma,delta and epsilon

class node{

	var $arr = array('0'=>'alpha','1'=>'beta','2'=>'gamma','3'=>'delta','4'=>'epsilon');
	
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
	
	// routing function
		function router()
		{
			// check if the url parameter is set
			if(isset($_GET['url']))
			{
				// load the url into url variable
				$url = $_GET['url'];
				
				//trim the url to remove slashes on right
				$url = rtrim($url,'/');
				//break the url to fragments
				$url = explode('/',$url);
				//load the url to the object variable routes

				foreach($url as $key => $value)
				{
					if(isset($this->arr[$key]))
					$this->set($this->arr[$key],$value);
					else
					$this->set($key,$value);
				}	
			}	
			
			// load the app root controller and create an object
			require_once "app".DS."controllers".DS."root.php";
			$root = new root();
			
			// check if first fragment exists
			if(isset($this->alpha))
			{
				// name the fragment as alpha (for our convenience)
				$alpha= $this->alpha;
				$file = "app".DS."controllers".DS.$alpha.".php";
				
				//check if controller with the name exists in the controller folder
				if(file_exists($file))
				{
					//if exists then load it and create an object
					require_once $file;
					$app = new $alpha();
					//check if second route fragment exists
					if(isset($this->beta))
					{
						//if exists then name it as beta
						$beta = $this->beta;
						//check if a method name of beta varaible exists in the controller
						//if exists call it else call the default - main function
						if(method_exists($alpha,$beta))
						$app->$beta();
						else
							$app->main();
					}else
					{
						//if second fragment is not mentioned then call the default -main function
						$app->main();
					}
				}
				else
				{
					//if the controller by name $alpha doesnt exists then check if its a function
					//in the root controller..if yes then call the funciton
					//else call the main function of root controller
					if(method_exists('root',$alpha))
						$root->$alpha();
					else
						$root->main();
				}
					
				
			}else
			{
					// if nothing is mentioned in the url then load the 
					//default function of the root controller
					$root->main();
			}
		}

}
?>