<?php
	include dirname(dirname(dirname(__DIR__))).'/admin/base.php';
?>

<form role="form" id="form" >

	<input type="hidden" id="ID" name="ID" value="<?php echo $ID; ?>" />

	¿Esta seguro de eliminar este usuario?

	<hr>

  	<button data-dismiss="modal" aria-label="Cerrar" class="btn btn-light" style="float: left; margin: 0px;">Cerrar</button>
  	<button type="submit" id="btn-enviar" class="btn btn-danger" style="float: right; margin: 0px;">Eliminar</button>
</form>

<script type="text/javascript">
	jQuery("#form").on("submit", function(e){
		e.preventDefault();
		_delete( jQuery(this) );
	});
</script>