<?php
	include dirname(dirname(dirname(__DIR__))).'/admin/base.php';

	$pass = md5($password);

	$DB->query("
		UPDATE 
			users 
		SET 
			nombre = '{$nombre}',
			email = '{$email}',
			pass = '{$pass}'
		WHERE 
			id = {$ID};
	");

	echo json_encode(array( "code" => 1 ));
?>