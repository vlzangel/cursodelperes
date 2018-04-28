<?php
	function HOME(){
		global $CONFIG;
		return $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/".$CONFIG["home"]."/backend/";
	}

	function WEB(){
		global $CONFIG;
		return $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/".$CONFIG["home"]."/";
	}
?>