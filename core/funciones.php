<?php
	function _e($clave, $alternativo = "", $dominio = false, $echo = true ){
		global $DB;
		global $PAGE;

		if( $dominio === false ){ $dominio = $PAGE; }

		$info = $DB->get_var("SELECT contenido FROM contents WHERE dominio = '{$dominio}' AND clave = '{$clave}' ");

		if( $info === false ){
			$info = $alternativo;
		}

		if( $echo ){
			echo trim( $info );
		}else{
			return trim( $info );
		}
	}

	function editable($clave, $dominio = false, $echo = true){
		global $PAGE;
		global $SESSION;

		if( $dominio === false ){ $dominio = $PAGE; }

		if( $SESSION->get("user") !== false ){
			if( $echo ){
				echo "data-accion='editable' data-dominio='{$dominio}' data-clave='{$clave}'";
			}else{
				return "data-accion='editable' data-dominio='{$dominio}' data-clave='{$clave}'";
			}
		}
	}

	function attr_editable($clave, $selector, $attr, $dominio = false, $echo = true){
		global $PAGE;
		global $SESSION;

		if( $dominio === false ){ $dominio = $PAGE; }

		if( $SESSION->get("user") !== false ){
			if( $echo ){
				echo " data-accion='attr_editable' data-dominio='{$dominio}' data-clave='{$clave}' data-selector='{$selector}' data-attr='{$attr}' ";
			}else{
				return " data-accion='attr_editable' data-dominio='{$dominio}' data-clave='{$clave}' data-selector='{$selector}' data-attr='{$attr}' ";
			}
		}
	}

	function prueba($data){
		echo "<pre>";
			print_r($data);
		echo "</pre>";
	}

	function HOME(){
		global $CONFIG;
		global $subPath;
		$ZONA = ( $subPath == "back" ) ? "admin/" : "";
		return $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/".$CONFIG["home"]."/".$ZONA;
	}

	function RAIZ(){
		global $CONFIG;
		return $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/".$CONFIG["home"]."/";
	}

	function PAGE(){
		global $CONFIG;
		global $PAGE;
		if( $PAGE == "/" ){ $PAGE = ""; }
		return $PAGE;
	}

	function setStyle($path, $print = true){
		$path = HOME()."recursos/css/".$path;
		if( $print ){
			echo "<link rel=stylesheet type=text/css href='{$path}.css?v=".time()."' />";
		}else{
			return "<link rel=stylesheet type=text/css href='{$path}.css?v=".time()."' />";
		}
	}

	function setStyles($data){
		if( count($data) > 0 ){
			foreach ($data as $style) {
				setStyle($style);
			}
		}
	}

	function setScript($path, $print = true){
		$path = HOME()."recursos/js/".$path;
		if( $print ){
			echo "<script type='text/javascript' src='{$path}.js?v=".time()."' ></script>";
		}else{
			return "<script type='text/javascript' src='{$path}.js?v=".time()."' ></script>";
		}
	}

	function setScripts($data){
		if( count($data) > 0 ){
			foreach ($data as $script) {
				setScript($script);
			}
		}
	}
?>