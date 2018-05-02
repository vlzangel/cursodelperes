<?php
	
	$r = $DB->get_row( "SELECT * FROM mensajes WHERE id='{$ID}' " );

	$notas = array();
	if( $r->notas != "" ){
		$notas = unserialize($r->notas);
	}else{
		$notas = array();
	}

	if( $referencia != "" ){
		$notas[] = array(
			"info" => $referencia,
			"fecha" => time()
		);
	}

	$notas = serialize($notas);

	$DB->query("
		UPDATE 
			mensajes 
		SET 
			status = '{$status}',
			seguimiento = '{$seguimiento}',
			notas = '{$notas}'
		WHERE 
			id = {$ID};
	");

	echo json_encode(array( "code" => 1 ));
?>