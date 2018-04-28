<?php 
	include dirname(dirname(__DIR__)).'/base.php'; 
	extract($_GET);
	if( file_exists(__DIR__."/".$file.".php") ){
		include __DIR__."/".$file.".php";
	}
?>