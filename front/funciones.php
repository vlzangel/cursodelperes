<?php
	$funciones = array(
		"menus"
	);
	foreach ($funciones as $value) {
		$archivo = dirname(__FILE__)."/funciones/".$value.".php";
		if( file_exists( $archivo )){
			include( $archivo );
		}
	}
?>