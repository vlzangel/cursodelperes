function create(_this){
	jQuery.post(
		HOME+"/ajax/new.php",
		_this.serialize(),
		function(data){
			table.ajax.reload();
            cerrar();
		}, "json"
	).fail(function(e){
		console.log( e );
	});
}

function update(_this){
	jQuery.post(
		HOME+"/ajax/update.php",
		_this.serialize(),
		function(data){
			table.ajax.reload();
            cerrar();
		}, "json"
	).fail(function(e){
		console.log( e );
	});
}

function _delete(_this){
    /*var confirmed = confirm("El registro será borrado irreversiblemente");
    if (confirmed == true) {*/
		jQuery.post(
			HOME+"/ajax/delete.php",
			_this.serialize(),
			function(data){
				table.ajax.reload();
	            cerrar();
			}, "json"
		).fail(function(e){
			console.log( e );
		});
    //}
}

function img_cargada(img_reducida){
	jQuery("#img_reducida").val(img_reducida);
	jQuery("#img_vista").attr("src", img_reducida);
}