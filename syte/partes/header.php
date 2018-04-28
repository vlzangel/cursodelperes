<!DOCTYPE html>
<html>
	<head>
		<title>Curso del PER online - Test del PER</title>
		<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous" />
        <link href="<?php echo HOME(); ?>lib/bootstrap/bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet" />
        <script src="<?php echo HOME(); ?>lib/jquery/jquery.min.js?v=<?php echo time(); ?>"></script>
        <script src="<?php echo HOME(); ?>lib/jquery/Smooth.js?v=<?php echo time(); ?>"></script>
        <script src="<?php echo HOME(); ?>lib/bootstrap/bootstrap.min.js?v=<?php echo time(); ?>"></script>
        <script src="<?php echo HOME(); ?>lib/recaptcha/api.js?v=<?php echo time(); ?>"></script>
		<script type="text/javascript"> var HOME = "<?php echo HOME(); ?>"; </script>
		<?php
			setStyles(array(
				"globales",
				"responsive/globales",
				"formularios"
			));
			setScripts(array(
				"globales",
				"formularios"
			));
		?>
	</head>
	<body>
		<nav>
			<div class='container'>
				<div class='logo_header'> </div>
				<?php
					echo MENU( array(
						"Pedido" => HOME(),
						"Contacto" => HOME()."contacto",
						"Panel de Control" => HOME()."backend",
					));
				?>
			</div>
		</nav>
				