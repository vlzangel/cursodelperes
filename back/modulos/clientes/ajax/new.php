<?php
	$pass = md5($password);
	$DB->query("
		INSERT INTO 
			clientes 
		VALUES (
			NULL,
			'{$nombre}',
			'{$apellido}',
			'{$dni}',
			'{$telefono}',
			'{$email}',
			'{$pass}'
		)
	");
	echo json_encode(array( "code" => 1 ));
?>