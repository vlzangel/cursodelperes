<form role="form" id="form" >

	<input type="hidden" id="ID" name="ID" value="<?php echo $r->id; ?>" />
	<input type="hidden" id="file" name="file" value="new" />

	<div class="form-group">
		<label for="nombre" >Nombres </label>
		<input type="text" class="form-control" id="nombre" name="nombre" required />
		<div class="val_error">Este campo es obligatorio</div>
	</div>

	<div class="form-group">
		<label for="apellido" >Apellidos </label>
		<input type="text" class="form-control" id="apellido" name="apellido" required />
		<div class="val_error">Este campo es obligatorio</div>
	</div>

	<div class="form-group">
		<label for="dni" >DNI </label>
		<input type="text" class="form-control" id="dni" name="dni" required />
		<div class="val_error">Este campo es obligatorio</div>
	</div>

	<div class="form-group">
		<label for="telefono" >Tel&eacute;fono </label>
		<input type="text" class="form-control" id="telefono" name="telefono" required />
		<div class="val_error">Este campo es obligatorio</div>
	</div>

	<div class="form-group">
		<label for="email" >Email </label>
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
		ajax( jQuery(this) );
	});
</script>