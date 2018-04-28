<?php

	class session{
		function __construct(){
			$this->init();
		}

		function init(){
			if( !isset($_SESSION) ){
				session_start();
			}
		}

		function get($clave){
			if( isset($_SESSION[$clave]) ){
				return $_SESSION[$clave];
			}else{
				return false;
			}
		}

		function set($clave, $valor){
			$_SESSION[$clave] = $valor;
		}

		function borrar($clave){
			unset($_SESSION[$clave]);
		}
	}

	$SESSION = new session();
?>