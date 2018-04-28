<?php
	include dirname(dirname(__DIR__)).'/base.php'; 
	$r = $DB->get_row( "SELECT * FROM users WHERE id='{$ID}' " );
?>

<form role="form" id="form" >

	<input type="hidden" id="ID" name="ID" value="<?php echo $r->id; ?>" />
	<input type="hidden" id="file" name="file" value="update" />

	<div class="form-group">
		<label for="nombre" >Nombre </label>
		<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $r->nombre; ?>" required />
		<div class="val_error">Este campo es obligatorio</div>
	</div>

	<div class="form-group">
		<label for="subtitulo" >Email </label>
		<input type="text" class="form-control" id="email" name="email" value="<?php echo $r->email; ?>" required />
		<div class="val_error">Este campo es obligatorio</div>
	</div>

	<div class="form-group">
		<label for="password" >Contrase&ntilde;a </label>
		<input type="password" class="form-control" id="password" name="password" />
		<div class="val_error">Este campo es obligatorio</div>
	</div>

	<div id="msg" class="alert alert-danger d-none" role="alert"></div>
	<hr>
  	<button type="submit" id="btn-enviar" class="btn btn-primary">Actualizar</button>
</form>

<script type="text/javascript">
	jQuery("#form").on("submit", function(e){
		e.preventDefault();
		ajax( jQuery(this) );
	});
</script>