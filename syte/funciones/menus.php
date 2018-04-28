<?php
	function MENU($menus){
		$_menu = "";
		foreach ($menus as $menu => $link) {
			$_menu .= "<li><a href='{$link}'>{$menu}</a></li>";
		}
		echo "<ul>{$_menu}</ul>";
	}
?>