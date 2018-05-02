jQuery(document).ready(function(){

	jQuery("#login").on("submit", function(e){
		e.preventDefault();

		jQuery("#btn-login").attr("value", "Ingresando...");
		jQuery("#btn-login").prop("diseable", true);

		jQuery.post(
			HOME+"admin/ajax/login.php",
			jQuery(this).serialize(),
			function(data){
				console.log( data );
				if( data.code == 1 ){
					location.reload();
				}else{
					jQuery(".login_error").fadeIn("slow");

					jQuery("#btn-login").attr("value", "Ingresar");
					jQuery("#btn-login").prop("diseable", false);
				}
			}, "json"
		).fail(function(e){
			console.log( e );

			jQuery("#btn-login").attr("value", "Ingresar");
			jQuery("#btn-login").prop("diseable", false);
		});
	});

});