<?php
	if( $password != "" ){ $pass = ", pass = '".md5($password)."'"; }	
	$DB->query("
		UPDATE 
			users 
		SET 
			nombre = '{$nombre}',
			email = '{$email}' {$pass}
		WHERE 
			id = {$ID};
	");

	echo json_encode(array( "code" => 1 ));
?>