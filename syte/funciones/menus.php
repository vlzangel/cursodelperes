<?php
	function MENU(){
		$menus = array(
			"Inicio" => HOME(),
			"Pedido" => HOME()."/pedido",
			"Contacto" => HOME()."/contacto",
		);

		$_menu = "";
		foreach ($menus as $menu => $link) {
			$_menu .= "<li><a href='{$link}'>{$menu}</a></li>";
		}

		echo "
			<nav {$PARAM['clases']}>
				<div class='container'>
					<div class='logo_header'> </div>
					<ul>
						{$_menu}
					</ul>
				</div>
			</nav>
		";
	}
?>