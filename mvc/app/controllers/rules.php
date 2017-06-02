<?php
/*
** KITE - A NANO PHP MVC FRAMEWORK
** Author - Krishna Teja G S
** website - packetcode.com
*/

//package - app/controller.php

// sample application class
class rules
{

	function main()
	{
		KITE::render('rules');
	}

    function ruleslogat()
    {
        $uid=1;
        $model = KITE::getModel('TWVerificare');
		$model->getUserName($uid);
        KITE::render('ruleslogat');
    }

}


?>