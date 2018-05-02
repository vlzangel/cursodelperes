<?php
	if( $cargarCore ){

		$preCargas = array(
			"header",
		);
		foreach ($preCargas as $archivo) {
			if( file_exists( dirname(__DIR__)."/".$subPath."/{$archivo}.php" ) ){
				include( dirname(__DIR__)."/".$subPath."/{$archivo}.php" );
			}
		}

		if( $PAGE != "" && $PAGE != "/" && $PAGE != "admin" && $PAGE != "admin/" ){
			if( file_exists( dirname(__DIR__)."/".$subPath."/modulos/".$PAGE."/index.php" ) ){
				include( dirname(__DIR__)."/".$subPath."/modulos/".$PAGE."/index.php" );
			}else{
				if( file_exists( dirname(__DIR__)."/".$subPath."/modulos/404/index.php" ) ){
					include( dirname(__DIR__)."/".$subPath."/modulos/404/index.php" );
				}else{
					include( __DIR__."/template/404.php" );
				}
			}
		}else{
			if( file_exists( dirname(__DIR__)."/".$subPath."/modulos/home/index.php" ) ){
				include( dirname(__DIR__)."/".$subPath."/modulos/home/index.php" );
			}else{
				if( file_exists( dirname(__DIR__)."/".$subPath."/index.php" ) ){
					include( dirname(__DIR__)."/".$subPath."/index.php" );
				}else{
					echo "Error no hay un index definido en [ ".$subPath."/ ]";
				}
			}
		}

		$posCargas = array(
			"footer",
		);
		foreach ($posCargas as $archivo) {
			if( file_exists( dirname(__DIR__)."/".$subPath."/{$archivo}.php" ) ){
				include( dirname(__DIR__)."/".$subPath."/{$archivo}.php" );
			}
		}

	}
?>