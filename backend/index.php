<?php

	$ACTUAL = __DIR__."/";
	$CORE = dirname(__DIR__)."/core/";
	$ADMIN = dirname(__DIR__)."/core/admin/";

	include $CORE.'base.php';

	if( $SESSION->get("user") !== false ){

		$URL = explode("?", $_SERVER["REQUEST_URI"]);
		$PAGE = str_replace($CONFIG["home"]."/backend/", "", $URL[0]);
		
		include $ADMIN.'funciones/funciones.php';

		include $ADMIN.'partes/header.php';
		if( file_exists($ACTUAL.'/modulos/menu.php') ){
			include $ACTUAL.'/modulos/menu.php';
		}
		include $ADMIN.'partes/menu.php';
		include $ADMIN.'partes/mensajes.php';
		include $ADMIN.'partes/busqueda.php';
		
		if( substr($PAGE, -1) == "/" ){
			$PAGE = substr($PAGE, 0, -1);
		}
		
		if( $PAGE == "" ){
			include $ADMIN.'partes/breadcrumb.php';
			include $ACTUAL.'/modulos/index.php';
		}else{
			if( file_exists( $ACTUAL."/modulos/".$PAGE."/index.php" ) ){
				include $ADMIN.'partes/breadcrumb.php';
				include( $ACTUAL."/modulos/".$PAGE."/index.php" );
			}else{
				include $ACTUAL.'/modulos/404.php';
			}
		}
		
		include $ADMIN.'partes/footer.php';
	}else{
		include $ADMIN.'login.php';
	}
	
?>