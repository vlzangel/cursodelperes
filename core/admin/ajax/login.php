<?php
	include (dirname(dirname(__DIR__))).'/base.php';

	extract($_POST);

	$respuesta = array(
		"code" => 0
	);

	$user = md5($user);
	$pass = md5($pass);

	$r = $DB->get_row( "SELECT id FROM users WHERE md5(email) = '{$user}' AND pass = '{$pass}' " );

	if( $r !== false ){
		$SESSION->set(
			"user",
			array(
				"id" => $r->id,
				"email" => $r->email,
				"nombre" => $r->nombre,
			)
		);

		$respuesta["code"] = 1;
	}

	echo json_encode( $respuesta );
?>