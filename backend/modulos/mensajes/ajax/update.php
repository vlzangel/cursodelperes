<?php
	$DB->query("
		UPDATE 
			mensajes 
		SET 
			status = '{$status}'
		WHERE 
			id = {$ID};
	");

	echo json_encode(array( "code" => 1 ));
?>