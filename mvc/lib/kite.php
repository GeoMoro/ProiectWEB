<?php
/*
** KITE - A NANO PHP MVC FRAMEWORK
** Author - Krishna Teja G S
** website - packetcode.com
*/

//package - lib/kite.php

// Kite is the core class for the whole application
// the router function takes the url analyze it and 
// based on the first url fragment it ill call the function

class kite
{
	
		private static $instance = array();
		
		function main()
		{
			self::config();
			require_once "lib".DS."node.php";
			$node = KITE::getInstance('node');
			$node->router();
		
		}
		
		private static function config()
		{
			$config = json_decode(file_get_contents('config.json'));

			self::recast('kite',$config);
			$kite = KITE::getInstance('kite');
			
		}

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
		
		// function to cast the stdObject to a class object 
		// assigns the varaibles to object class
		public static function recast($className, stdClass &$object)
		{
			if (!class_exists($className))
				throw new InvalidArgumentException(sprintf('Inexistant class %s.', $className));

			$new = KITE::getInstance($className);
			
			foreach($object as $property => &$value)
			{
				$new->$property = &$value;
				unset($object->$property);
			}
			unset($value);
			$object = (unset) $object;
		}
	
		
		public static function getInstance($class)
		{
			if(isset(self::$instance[$class]))
				return self::$instance[$class];
			else
			{
				if(!class_exists($class))
				self::autoload($class);
				if($class == 'pdo')
				{
					$kite = KITE::getInstance('kite');
					$host = $kite->DB->HOST;
					$db_name = $kite->DB->DB_NAME;
					$username = $kite->DB->USERNAME;
					$passwrod = $kite->DB->PASSWORD;
					
					self::$instance[$class] = new PDO("mysql:host=$host;dbname=$db_name", "$username", "$password");
				}else	
				self::$instance[$class] = new $class();
				return self::$instance[$class];
			}	
		}
		
		private static function autoload($class)
		{
			$paths = array('lib','app'.DS.'controllers','app'.DS.'models');
			foreach($paths as $path)
			{
				$file = $path.DS.$class.'.php';
				if(file_exists($file))
					require_once $file;
			}
		}
		
		public static function render($view)
		{
			$kite = KITE::getInstance('kite');
			$kite->set('view',$view);
			$tmpl = $kite->SITE->TMPL;
			$hash = $kite->SITE->HASH;
	
			$request = KITE::getInstance('request');
			if($request->get('tmpl')!=null)
			$tmpl = $request->get('tmpl');
			
			$basket = KITE::getInstance('basket');
			if($request->get('api')==='json' && $request->get('hash')===$hash)
				echo json_encode($basket);
			else if(	$request->get('api')==='html' && $request->get('hash')===$hash)
				require_once "app".DS."views".DS.$view.DS."default.php";	
			else
				require_once "templates".DS.$tmpl.DS."index.php";	
			
		}
		
		public static function app()
		{
			$kite = KITE::getInstance('kite');
			$view = $kite->get('view');
			require_once "app".DS."views".DS.$view.DS."default.php";	
		}
		
		public static function getModel($model)
		{
			$file = "app".DS."models".DS.$model.".php";
			if(file_exists($file))
			{
				require_once $file;
				$model_obj = new $model();
				return $model_obj;
			}
			else
				echo "model doesnt exists";
				
		}
}


?>