<?php
	$mensajes = $DB->get_results("SELECT * FROM mensajes ORDER BY fecha DESC");

	$data["data"] = array();

	if( $mensajes !== false ){
		$id = 1;
		foreach ($mensajes as $mensaje) {

			// $fecha = date("d/m/Y h:i A", strtotime($mensaje->fecha) );

			$mensaje->seguimiento = ( $mensaje->seguimiento == "" ) ? "" : " - ".$mensaje->seguimiento;

			$data["data"][] = array(
		        $id,
		        $mensaje->nombre,
		        $mensaje->email,
		        $mensaje->telefono,
		        $mensaje->status.$mensaje->seguimiento,
		        "<span onclick='abrir_link( jQuery( this ) )' data-id='".$mensaje->id."' data-titulo='Comentario' data-modal='update' class='enlace' >Ver</span>"
		    );
		    
		    $id++;
		}
	}

	echo json_encode($data);
?>