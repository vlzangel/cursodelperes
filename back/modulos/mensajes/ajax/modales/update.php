<?php
	$r = $DB->get_row( "SELECT * FROM mensajes WHERE id='{$ID}' " );
	$fecha = date("d/m/Y h:i A", strtotime($r->fecha) );
	$notas = "";
	if( $r->notas != "" && $r->notas != "a:0:{}" ){
		$_notas = unserialize($r->notas);
		foreach ($_notas as $nota) {
			$nota['fecha'] = date("d/m/Y h:i a");
			$notas .= "
				<div class='notas_item' >
					<div>{$nota['info']}</div>
					<span>{$nota['fecha']}</span>
				</div>
			";
		}
	}else{
		$notas = "No hay notas";
	}
?>
<form role="form" id="form" >

	<input type="hidden" id="ID" name="ID" value="<?php echo $r->id; ?>" />
	<input type="hidden" id="file" name="file" value="update" />
	<input type="hidden" id="status" name="status" value="Leido" />
	
	<div class="form-group">
		<label>Nombres </label>
		<input type="text" class="form-control" value="<?php echo $r->nombre; ?>" readonly />
	</div>
	
	<div class="form-group">
		<label>Email </label>
		<input type="text" class="form-control" value="<?php echo $r->email; ?>" readonly />
	</div>
	
	<div class="form-group">
		<label>Tel&eacute;fono </label>
		<input type="text" class="form-control" value="<?php echo $r->telefono; ?>" readonly />
	</div>
	
	<div class="form-group">
		<label>Fecha y Hora</label>
		<input type="text" class="form-control" value="<?php echo $fecha; ?>" readonly />
	</div>
	
	<div class="form-group">
		<label>Comentario</label>
		<textarea class="form-control" readonly><?php echo $r->comentarios; ?></textarea>
	</div>
	
	<div class="form-group">
		<label>Seguimiento</label>
		<select class="form-control" id="seguimiento" name="seguimiento">
			<option value="">Seleccione una opci&oacute;n</option>
			<?php
				$opciones = array(
					"Seguir",
					"Sin seguimiento",
				);
				foreach ($opciones as $value) {
					$select = ( $value == $r->seguimiento ) ? " selected " : "";
					echo "<option {$select}>{$value}</option>";
				}
			?>
		</select>
	</div>
	
	<div class="form-group">
		<label>Referencias de seguimiento</label>
		<textarea class="form-control" id="referencia" name="referencia" ></textarea>
	</div>
	
	<div class="form-group">
		<label>Notas</label>
		<div class='notas' >
			<?php echo $notas; ?>
		</div>
	</div>

	<div id="msg" class="alert alert-danger d-none" role="alert"></div>
	<hr>

	  	<button type="submit" class="btn btn-primary">Actualizar</button>
</form>

<script type="text/javascript">
	jQuery("#form").on("submit", function(e){
		e.preventDefault();
		ajax( jQuery(this) );
	});
</script>