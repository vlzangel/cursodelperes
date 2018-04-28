<?php
	include dirname(dirname(dirname(__DIR__))).'/admin/base.php';

	$pass = md5($password);
	
	$DB->query("
		INSERT INTO 
			users 
		VALUES (
			NULL,
			'{$nombre}',
			'{$email}',
			'{$pass}'
		)
	");

	echo json_encode(array( "code" => 1 ));
?>