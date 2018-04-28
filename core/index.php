<?php
	
	define("CONFIG", $CONFIG);

	include(__DIR__."/session.php");
	include(__DIR__."/db.php");
	include(__DIR__."/funciones_globales.php");
	include(__DIR__."/emails.php");

	if( FRONT ){
		include(__DIR__."/constructor.php");
	}

?>