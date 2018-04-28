<?php
	include dirname(dirname(dirname(__DIR__))).'/admin/base.php';
	$r = $DB->get_row( "SELECT * FROM mensajes WHERE id='{$ID}' " );
?>
<form role="form" id="form" >

	<input type="hidden" id="ID" name="ID" value="<?php echo $r->id; ?>" />
	
	<div  class="form-group">
		<label for="status" >Estatus</label>
		<select class="form-control" id="status" name="status" required >
			<option value="">Seleccione</option>
			<?php
				$status = array(
					"Sin Leer",
					"Leido"
				);

				foreach ($status as $valor) {
					$selected = ""; if( $valor == $r->status ){ $selected = "selected"; }
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
		update( jQuery(this) );
	});
</script>