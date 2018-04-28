<?php
	if( $password != "" ){ $pass = ", pass = '".md5($password)."'"; }	
	$DB->query("
		UPDATE 
			clientes 
		SET 
			nombre = '{$nombre}',
			apellido = '{$apellido}',
			dni = '{$dni}',
			telefono = '{$telefono}',
			email = '{$email}' {$pass}
		WHERE 
			id = {$ID};
	");

	echo json_encode(array( "code" => 1 ));
?>