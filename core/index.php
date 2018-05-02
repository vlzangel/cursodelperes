<?php
	
	$base = str_replace("/index.php", "", $_SERVER["SCRIPT_FILENAME"]);
	$base = str_replace($_SERVER["DOCUMENT_ROOT"], "", $base);

	$CONFIG["home"] = str_replace("/", "", $base);

	$PAGES = explode("?", $_SERVER["REQUEST_URI"]);
	$PAGES = str_replace($base."/", "", $PAGES[0]);
	$PAGES = explode("/", $PAGES);
	$PAGES = array_filter($PAGES, "strlen");

	extract($_POST);

	$cargarCore = false;
	$subPath = "front";
	$type = $PAGES[0];

	switch ($PAGES[0]) {
		case 'admin':
			$subPath = "back";
			$type = $PAGES[1];
			unset($PAGES[0]);
		break;
		case 'libs':
			$subPath = "libs";
			$type = $PAGES[1];
		break;
		case 'ajax':
			$subPath = "ajax";
			$type = "/front/";
			$modulo = $PAGES[1];
			unset($PAGES[1]);
			unset($PAGES[0]);
		break;
		case 'ajaxb':
			$subPath = "ajaxb";
			$type = "/back/";
			$modulo = $PAGES[1];
			unset($PAGES[1]);
			unset($PAGES[0]);
		break;
	}
	
	if( count($PAGES) > 0 ){
		$PAGE = implode("/", $PAGES);
	}else{
		$PAGE = "/";
	}

	if( $subPath == "libs" || $type == "recursos" ){
		$TEMP = explode("?", $PAGE);
		$ext = end( explode(".", $TEMP[0]) );
		switch ($ext) {
			case 'css':
				header("Content-type: text/css");
			break;
			case 'js':
				header("Content-type: text/javascript");
			break;
/*			case 'png':
				header("Content-type: " . image_type_to_mime_type(IMAGETYPE_PNG));
			break;
			case 'jpg':
				header("Content-type: " . image_type_to_mime_type(IMAGETYPE_JPEG));
			break;
			case 'jpeg':
				header("Content-type: " . image_type_to_mime_type(IMAGETYPE_JPEG));
			break;
			case 'gif':
				header("Content-type: " . image_type_to_mime_type(IMAGETYPE_GIF));
			break;*/
		}
	}

	if( $subPath == "libs" ){
		if( file_exists( dirname(__DIR__)."/core/{$PAGE}" ) ){
			if( is_dir( dirname(__DIR__)."/core/{$PAGE}" ) ){
				echo "Carpeta de recursos no accesible por medidas de seguridad";
			}else{
				header("Content-type: text/css");
				include( dirname(__DIR__)."/core/{$PAGE}" );
			}
		}else{
			echo "Archivo no encontrado: ".dirname(__DIR__)."/core/{$PAGE}";
		}
	}else{
		if( $type == "recursos" ){

			if( file_exists( dirname(__DIR__)."/".$subPath."/{$PAGE}" ) ){

				if( is_dir( dirname(__DIR__)."/".$subPath."/{$PAGE}" ) ){
					echo "Carpeta de recursos no accesible por medidas de seguridad";
				}else{
					echo file_get_contents( dirname(__DIR__)."/".$subPath."/{$PAGE}" );
				}
			}else{
				echo "Archivo no encontrado: ".dirname(__DIR__)."/".$subPath."/{$PAGE}";
			}
		}else{
			
			$core = array(
				"funciones",
				"libs/db",
				"libs/session",
			);
			foreach ($core as $archivo) {
				if( file_exists( __DIR__."/{$archivo}.php" ) ){
					include( __DIR__."/{$archivo}.php" );
				}
			}

			$preCargas = array(
				"funciones",
			);
			foreach ($preCargas as $archivo) {
				if( file_exists( dirname(__DIR__)."/".$subPath."/{$archivo}.php" ) ){
					include( dirname(__DIR__)."/".$subPath."/{$archivo}.php" );
				}
			}

			if( $subPath == "ajax" || $subPath == "ajaxb" ){
				if( file_exists( dirname(__DIR__).$type."modulos/{$modulo}/ajax/{$PAGE}.php" ) ){
					include( dirname(__DIR__).$type."modulos/{$modulo}/ajax/{$PAGE}.php" );
				}else{
					echo "Archivo no encontrado: ".dirname(__DIR__).$type."modulos/{$modulo}/ajax/{$PAGE}.php";
				}
			}else{
				$cargarCore = true;
			}
		}
	}

?>