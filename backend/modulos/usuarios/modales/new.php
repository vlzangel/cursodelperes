<form role="form" id="form" >

	<input type="hidden" id="ID" name="ID" value="<?php echo $r->id; ?>" />

	<div class="form-group">
		<label for="nombre" >Nombre </label>
		<input type="text" class="form-control" id="nombre" name="nombre" required />
		<div class="val_error">Este campo es obligatorio</div>
	</div>

	<div class="form-group">
		<label for="subtitulo" >Email </label>
		<input type="text" class="form-control" id="email" name="email" required />
		<div class="val_error">Este campo es obligatorio</div>
	</div>

	<div class="form-group">
		<label for="password" >Contrase&ntilde;a </label>
		<input type="password" class="form-control" id="password" name="password" required />
		<div class="val_error">Este campo es obligatorio</div>
	</div>

	<div id="msg" class="alert alert-danger d-none" role="alert"></div>
	<hr>
  	<button type="submit" id="btn-enviar" class="btn btn-primary">Crear</button>
</form>

<script type="text/javascript">
	jQuery("#form").on("submit", function(e){
		e.preventDefault();
		create( jQuery(this) );
	});
</script>