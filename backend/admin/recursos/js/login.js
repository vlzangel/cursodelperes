jQuery(document).ready(function(){

	jQuery("#login").on("submit", function(e){
		e.preventDefault();

		jQuery.post(
			"admin/recursos/ajax/login.php",
			jQuery(this).serialize(),
			function(data){
				console.log( data );
				if( data.code == 1 ){
					location.reload();
				}else{
					jQuery(".login_error").fadeIn("slow");
				}
			}, "json"
		).fail(function(e){
			console.log( e );
		});
	});

});