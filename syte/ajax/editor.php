<?php
	include dirname(dirname(__DIR__)).'/importador.php';

	extract($_POST);

	$CONTENIDO = str_replace("'", "\'", $CONTENIDO);
	$existe = $DB->get_var("SELECT id FROM contents WHERE dominio = '{$DOMINIO}' AND clave = '{$CLAVE}' ");
	if( $existe !== false ){
		echo "UPDATE contents SET contenido = '{$CONTENIDO}', modificacion = NOW() WHERE id = {$existe};";
		$DB->query("UPDATE contents SET contenido = '{$CONTENIDO}', modificacion = NOW() WHERE id = {$existe};");
	}else{
		$DB->query("
			INSERT INTO 
				contents
			VALUES (
				NULL,
				'{$DOMINIO}',
				'{$CLAVE}',
				'{$CONTENIDO}',
				NOW(),
				NOW()
			)
		");
	}

	// echo json_encode(array("code" => 1));
?>