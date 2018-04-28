<?php include dirname(dirname(__DIR__)).'/base.php'; ?>

<form role="form" id="form" class="eliminar" style="padding: 0px;" >
	<input type="hidden" id="ID" name="ID" value="<?php echo $ID; ?>" />
	<input type="hidden" id="file" name="file" value="delete" />
	¿Esta seguro de eliminar este pedido?
	<hr>
  	<button data-dismiss="modal" aria-label="Cerrar" class="btn btn-light" style="float: left; margin: 0px;">Cerrar</button>
  	<button type="submit" id="btn-enviar" class="btn btn-danger" style="float: right; margin: 0px;">Eliminar</button>
</form>

<script type="text/javascript">
	jQuery("#form").on("submit", function(e){
		e.preventDefault();
		ajax( jQuery(this) );
	});
</script>