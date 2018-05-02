<?php
	$data = array(
		"poblacion" => $poblacion,
		"provincia" => $provincia,
		"direccion" => $direccion,
		"cp" => $cp,
		"telefono" => $telefono,
		"comentarios" => $comentarios
	);

	$data = serialize($data);

	$DB->query("
		UPDATE 
			pedidos 
		SET 
			nombres = '{$nombre}',
			nif = '{$nif}',
			email = '{$email}',
			estatus = '{$estatus}',
			data = '{$data}'
		WHERE 
			id = {$ID};
	");

	echo json_encode(array( "code" => 1 ));
?>