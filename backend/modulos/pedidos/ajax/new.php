<?php
	include dirname(dirname(dirname(__DIR__))).'/admin/base.php';

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
		INSERT INTO 
			pedidos 
		VALUES (
			NULL,
			'{$nombre}',
			'{$nif}',
			'{$email}',
			'{$data}',
			'{$estatus}'
		)
	");

	echo json_encode(array( "code" => 1 ));
?>