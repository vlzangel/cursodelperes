<?php
	$users = $DB->get_results("SELECT * FROM users");

	$data["data"] = array();

	if( $users !== false ){
		foreach ($users as $user) {
			$data["data"][] = array(
		        $user->id,
		        $user->nombre,
		        $user->email,
		        "<span onclick='abrir_link( jQuery( this ) )' data-id='".$user->id."' data-titulo='Editar Usuario' data-modal='update' class='enlace' >Editar</span>
				<span onclick='abrir_link( jQuery( this ) )' data-id='".$user->id."' data-titulo='Eliminar Usuario' data-modal='delete' class='enlace'>Eliminar</span>"
		    );
		}
	}

	echo json_encode($data);
?>