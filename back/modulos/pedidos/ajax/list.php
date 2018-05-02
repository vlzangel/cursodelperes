<?php
	$pedidos = $DB->get_results("SELECT * FROM pedidos");

	$data["data"] = array();


	if( $pedidos !== false ){
		foreach ($pedidos as $pedido) {

			$extra = "";
			$_data = unserialize($pedido->data);
			$extra .= "
				<b>Poblaci&oacute;n: </b> {$_data['poblacion']}<br>
				<b>Provincia: </b> {$_data['provincia']}<br>
				<b>Direcci&oacute;n: </b> {$_data['direccion']}<br>
				<b>CP: </b> {$_data['cp']}
			";

			$data["data"][] = array(
		        $pedido->id,
		        $pedido->nombres,
		        $pedido->nif,
		        $pedido->email,
		        $_data["telefono"],
		        $pedido->estatus,
		        "<span onclick='abrir_link( jQuery( this ) )' data-id='".$pedido->id."' data-titulo='Editar Pedido' data-modal='update' class='enlace' >Ver / Editar</span>
				<span onclick='abrir_link( jQuery( this ) )' data-id='".$pedido->id."' data-titulo='Eliminar Pedido' data-modal='delete' class='enlace'>Eliminar</span>"
		    );
		}
	}

	echo json_encode($data);
?>