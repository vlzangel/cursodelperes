<?php
	function HOME(){
		global $CONFIG;
		return $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/".$CONFIG["home"]."/";
	}

	function setStyle($path, $print = true){
		$path = HOME()."css/".$path;
		if( $print ){
			echo "<link rel=stylesheet type=text/css href='{$path}.css?v=".time()."' />";
		}else{
			return "<link rel=stylesheet type=text/css href='{$path}.css?v=".time()."' />";
		}
	}

	function setScript($path, $print = true){
		$path = HOME()."js/".$path;
		if( $print ){
			echo "<script type='text/javascript' src='{$path}.js?v=".time()."' ></script>";
		}else{
			return "<script type='text/javascript' src='{$path}.js?v=".time()."' ></script>";
		}
	}

	function setStyles($data){
		if( count($data) > 0 ){
			foreach ($data as $style) {
				setStyle($style);
			}
		}
	}

	function setScripts($data){
		if( count($data) > 0 ){
			foreach ($data as $script) {
				setScript($script);
			}
		}
	}

	$funciones = array(
		"menus"
	);
	foreach ($funciones as $value) {
		$archivo = dirname(__DIR__)."/funciones/".$value.".php";
		if( file_exists( $archivo )){
			include( $archivo );
		}
	}
?>