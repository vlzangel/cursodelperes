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
?>