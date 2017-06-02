<?php
/*
** KITE - A NANO PHP MVC FRAMEWORK
** Author - Krishna Teja G S
** website - packetcode.com
*/

//package - index.php
//  Triggering KITE Class


define('DS',DIRECTORY_SEPARATOR);
require_once "lib".DS."kite.php";

$kite = KITE::getInstance('kite');
$kite->main();
?>