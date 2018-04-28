<?php
	header('Content-Type: text/html; charset=utf-8');

	include dirname(dirname(dirname(__DIR__))).'/admin/base.php';

	$mensajes = $DB->get_results("SELECT * FROM mensajes");

	$data["data"] = array();

	if( $mensajes !== false ){
		foreach ($mensajes as $mensaje) {

			$fecha = date("d/m/Y h:i A", strtotime($mensaje->fecha) );

			$data["data"][] = array(
		        $mensaje->id,
		        $mensaje->nombre,
		        $mensaje->email,
		        $mensaje->telefono,
		        $mensaje->comentarios,
		        $fecha,
		        "<span onclick='abrir_link( jQuery( this ) )' data-id='".$mensaje->id."' data-titulo='Editar Estatus' data-modal='update' class='enlace' >{$mensaje->status}</span>"
		    );
		}
	}

	echo json_encode($data);
?>