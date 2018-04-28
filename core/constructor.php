<?php
	/**
	* 	Constructor Web
	*/

	$URL = explode("?", $_SERVER["REQUEST_URI"]);
	$PAGE = str_replace($CONFIG["home"]."/", "", $URL[0]);

	$preCargas = array(
		"funciones/funciones",
		"partes/preHeader",
		"partes/header",
	);
	foreach ($preCargas as $archivo) {
		if( file_exists( dirname(__DIR__)."/syte/{$archivo}.php" ) ){
			include( dirname(__DIR__)."/syte/{$archivo}.php" );
		}
	}
	if( $PAGE != "" && $PAGE != "/" ){
		if( file_exists( dirname(__DIR__)."/syte/pages/".$PAGE.".php" ) ){
			include( dirname(__DIR__)."/syte/pages/".$PAGE.".php" );
		}else{
			if( file_exists( dirname(__DIR__)."/syte/pages/404.php" ) ){
				include( dirname(__DIR__)."/syte/pages/404.php" );
			}else{
				include( __DIR__."/plantillas/404.php" );
			}
		}
	}else{
		if( file_exists( dirname(__DIR__)."/syte/pages/home.php" ) ){
			include( dirname(__DIR__)."/syte/pages/home.php" );
		}else{
			if( file_exists( dirname(__DIR__)."/syte/index.php" ) ){
				include( dirname(__DIR__)."/syte/index.php" );
			}else{
				echo "Error no hay un index definido";
			}
		}
	}
	$posCargas = array(
		"footer",
	);
	foreach ($posCargas as $archivo) {
		if( file_exists( dirname(__DIR__)."/syte/partes/{$archivo}.php" ) ){
			include( dirname(__DIR__)."/syte/partes/{$archivo}.php" );
		}
	}
?>