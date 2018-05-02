<?php
	$pass = md5($password);
	$DB->query("
		INSERT INTO 
			users 
		VALUES (
			NULL,
			'{$nombre}',
			'{$email}',
			'{$pass}',
			'Administrador'
		)
	");

	echo json_encode(array( "code" => 1 ));
?>