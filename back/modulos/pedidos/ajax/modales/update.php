<?php
	$r = $DB->get_row( "SELECT * FROM pedidos WHERE id='{$ID}' " );
	$data = unserialize($r->data);
?>
<form role="form" id="form" >

	<input type="hidden" id="ID" name="ID" value="<?php echo $r->id; ?>" />
	<input type="hidden" id="file" name="file" value="update" />

	<div class="form-group">
		<label for="nombre" >Nombre y Apellidos</label>
		<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $r->nombres; ?>" required />
		<div class="val_error">Este campo es obligatorio</div>
	</div>
	
	<div  class="form-group">
		<label for="direccion" >Direcci&oacute;n</label>
		<input class="form-control" type="text" id="direccion" name="direccion" value="<?php echo $data["direccion"]; ?>"  required />
		<div class="val_error"></div>
	</div>
	
	<div  class="form-group">
		<label for="poblacion" >Poblaci&oacute;n</label>
		<input class="form-control" type="text" id="poblacion" name="poblacion" value="<?php echo $data["poblacion"]; ?>"  required />
		<div class="val_error"></div>
	</div>
	
	<div  class="form-group">
		<label for="provincia" >Provincia</label>
		<input class="form-control" type="text" id="provincia" name="provincia" value="<?php echo $data["provincia"]; ?>"  required />
		<div class="val_error"></div>
	</div>
	
	<div  class="form-group">
		<label for="telefono" >Tel&eacute;fono</label>
		<input class="form-control" type="text" id="telefono" name="telefono" value="<?php echo $data["telefono"]; ?>" pattern="^[9|8|7|6]\d{8}$" title="Tel&eacute;fono (9 dígitos comenzando por 9, 8, 7 o 6)" required />
		<div class="val_error"></div>
	</div>
	
	<div  class="form-group">
		<label for="cp" >C.P.</label>
		<input class="form-control" type="text" id="cp" name="cp" value="<?php echo $data["cp"]; ?>" required /> <!-- pattern="/^(?:0[1-9]|[1-4]\d|5[0-2])\d{3}$/" title="Ingrese un CP valido" -->
		<div class="val_error"></div>
	</div>
	
	<div  class="form-group">
		<label for="nif" >NIF</label>
		<input class="form-control" type="text" id="nif" name="nif" value="<?php echo $r->nif; ?>" required /> <!-- (([X-Z]{1})([-]?)(\d{7})([-]?)([A-Z]{1}))|((\d{8})([-]?)([A-Z]{1})) -->
		<div class="val_error"></div>
	</div>
	
	<div  class="form-group">
		<label for="email" >Email</label>
		<input 
			class="form-control" 
			type="text" 
			id="email" 
			name="email" 
			value="<?php echo $r->email; ?>"
			title="Ej: ejemplo@mail.com" 
			pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" 
			required
		/>
		<div class="val_error"></div>
	</div>
	
	<div  class="form-group">
		<label for="comentarios" >Comentarios</label>
		<textarea class="form-control" id="comentarios" name="comentarios" required ><?php echo $data["comentarios"]; ?></textarea>
		<div class="val_error"></div>
	</div>
	
	<div  class="form-group">
		<label for="estatus" >Estatus</label>
		<select class="form-control" id="estatus" name="estatus" required >
			<option value="">Seleccione</option>
			<?php
				$status = array(
					"Por pagar",
					"Pagado"
				);

				foreach ($status as $valor) {
					$selected = ""; if( $valor == $r->estatus ){ $selected = "selected"; }
					echo "<option {$selected}>{$valor}</option>";
				}
			?>
		</select>
		<div class="val_error"></div>
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