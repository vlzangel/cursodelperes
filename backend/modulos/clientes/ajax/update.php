<?php
	include dirname(dirname(dirname(__DIR__))).'/admin/base.php';

	$pass = md5($password);

	$DB->query("
		UPDATE 
			clientes 
		SET 
			nombre = '{$nombre}',
			apellido = '{$apellido}',
			dni = '{$dni}',
			telefono = '{$telefono}',
			email = '{$email}',
			clave = '{$pass}'
		WHERE 
			id = {$ID};
	");

	echo json_encode(array( "code" => 1 ));
?>