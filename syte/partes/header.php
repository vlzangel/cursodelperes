<!DOCTYPE html>
<html>
	<head>
		<title>Curso del PER online - Test del PER</title>
		<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'>

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

		<?php
			setStyles(array(
				"bootstrap.min",
				"globales",
				"style"
			));
		?>
		
		<?php
			setScripts(array(
				"jquery",
				"Smooth",
				"bootstrap.min",
				"globales",
				"js"
			));

		?>

		<script type="text/javascript" src="https://www.google.com/recaptcha/api.js" ></script>

		<script type="text/javascript">
			var HOME = "<?php echo HOME(); ?>";
		</script>
	</head>
	<body>
		<?php
			echo MENU();
		?>