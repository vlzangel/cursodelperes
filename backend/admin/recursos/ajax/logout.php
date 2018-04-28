<?php
	include (dirname(dirname(__DIR__))).'/base.php';
	include (dirname(dirname(__DIR__))).'/funciones/funciones.php';
	$SESSION->borrar("user");
	header("location: ".HOME());
?>