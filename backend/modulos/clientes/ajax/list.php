<?php
	header('Content-Type: text/html; charset=utf-8');

	include dirname(dirname(dirname(__DIR__))).'/admin/base.php';

	$users = $DB->get_results("SELECT * FROM clientes");

	$data["data"] = array();

	if( $users !== false ){
		foreach ($users as $user) {
			$data["data"][] = array(
		        $user->id,
		        $user->nombre,
		        $user->apellido,
		        $user->email,
		        $user->telefono,
		        "<span onclick='abrir_link( jQuery( this ) )' data-id='".$user->id."' data-titulo='Editar Cliente' data-modal='update' class='enlace' >Editar</span>
				<span onclick='abrir_link( jQuery( this ) )' data-id='".$user->id."' data-titulo='Eliminar Cliente' data-modal='delete' class='enlace'>Eliminar</span>"
		    );
		}
	}

	echo json_encode($data);
?>