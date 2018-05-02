<?php
	$DB->query("
		DELETE FROM 
			clientes 
		WHERE 
			id = {$ID};
	");

	echo json_encode(array( "code" => 1 ));
?>