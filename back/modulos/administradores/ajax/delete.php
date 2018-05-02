<?php
	$DB->query("
		DELETE FROM 
			users 
		WHERE 
			id = {$ID};
	");

	echo json_encode(array( "code" => 1 ));
?>