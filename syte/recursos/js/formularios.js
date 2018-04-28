jQuery(document).ready(function(){

	jQuery("#form").on("submit", function(e){
		e.preventDefault();

		jQuery("#btn-enviar").html("Enviando...");
    	jQuery("#btn-enviar").prop('disabled', true);

		jQuery.post(
			HOME+"/ajax/enviar.php",
			jQuery(this).serialize(),
			function(data){
				if( data.code == 1 ){

					jQuery("#msg").html("Informaci&oacute;n enviada exitosamente!");
					jQuery("#msg").removeClass("alert-danger");
					jQuery("#msg").removeClass("d-none");
					jQuery("#msg").addClass("alert-success");
					jQuery("#form").trigger("reset");
				}else{
					jQuery("#msg").html(data.error);
					jQuery("#msg").addClass("alert-danger");
					jQuery("#msg").removeClass("alert-success");
					jQuery("#msg").removeClass("d-none");
				}

				jQuery("#btn-enviar").html("Enviar Email");
		    	jQuery("#btn-enviar").prop('disabled', false);

			}, 'json'
		).fail(function(e){
			console.log( e );

			jQuery("#btn-enviar").val("Enviar Email");
	    	jQuery("#btn-enviar").prop('disabled', false);
		});

	});

});
