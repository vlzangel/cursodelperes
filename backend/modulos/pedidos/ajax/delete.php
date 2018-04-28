<?php
	include dirname(dirname(dirname(__DIR__))).'/admin/base.php';

	$DB->query("
		DELETE FROM 
			pedidos 
		WHERE 
			id = {$ID};
	");

	echo json_encode(array( "code" => 1 ));
?>