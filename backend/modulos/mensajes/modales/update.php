<?php
	include dirname(dirname(__DIR__)).'/base.php'; 
	$r = $DB->get_row( "SELECT * FROM mensajes WHERE id='{$ID}' " );
	$fecha = date("d/m/Y h:i A", strtotime($r->fecha) );
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
		<label>Fecha y Hora</label>
		<textarea class="form-control" value="<?php echo $fecha; ?>" readonly><?php echo $r->comentarios; ?></textarea>
	</div>

	<div id="msg" class="alert alert-danger d-none" role="alert"></div>
	<hr>
  	<button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Cerrar</button>
</form>

<?php if( $r->status != "Leido" ){ ?>
	<script type="text/javascript">
		jQuery.post(
	        HOME+"/ajax/index.php",
	        jQuery("#form").serialize(),
	        function(data){
	            table.ajax.reload();
	        }, "json"
	    ).fail(function(e){
	        console.log( e );
	    });
	</script>
<?php } ?>