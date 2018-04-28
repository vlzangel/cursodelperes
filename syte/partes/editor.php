<?php if( $SESSION->get("user") !== false ){ ?>
	<style type="text/css">
		div#editor,
		div#editor2
		{
		    position: fixed;
		    z-index: 99999999999;
		    top: 0;
		    left: 0;
		    width: 100%;
		    height: 100%;
		    box-sizing: border-box;
		    padding: 100px;
		    background-color: rgba(0,0,0,0.6);
		}
		.fr-wrapper {
		    height: calc( 100% - 90px );
		}
		div#edit,
		div#edit2 {
		    height: 100%;
		    margin-top: 30px;
		}

		div#editor2 textarea {
			width: 100%;
    		height: calc( 100% - 20px );
    		resize: none;
		}

		.ocultarEditor{
			display: none;
		}
		#cerrarEditor,
		#cerrarEditor2
		{
			position: absolute;
			top: 50px;
			right: 50px;
			font-size: 35px;
			cursor: pointer;
			z-index: 999999999;
			border-radius: 50%;
			color: #FFF;
		}

		#saveEditor,
		#saveEditor2
		{
		    position: absolute;
		    bottom: 50px;
		    right: 100px;
		    font-size: 26px;
		    cursor: pointer;
		    z-index: 999999999;
		    background: #15acdc;
		    border-radius: 5px;
		    border: solid 2px #008db9;
		    padding: 5px 50px;
		    color: #FFF;
		}
	</style>
	<div id="editor" class="ocultarEditor">
		<i id="cerrarEditor" class="fas fa-times-circle"></i>
        <div id='edit' class="fr-view">
            
        </div>
        <button id="saveEditor">Save</button>
    </div>
	<div id="editor2" class="ocultarEditor">
		<i id="cerrarEditor2" class="fas fa-times-circle"></i>
        <textarea id="edit2"></textarea>
        <button id="saveEditor2">Save</button>
    </div>
    <script>
    	var seccionActual = "";
        jQuery(function(){
        	
            jQuery('#cerrarEditor').on('click', function (e) {
            	jQuery('#edit').froalaEditor('destroy');
                jQuery('#edit').addClass('fr-view');
                jQuery('#editor').addClass('ocultarEditor');
            });
        	
            jQuery('#cerrarEditor2').on('click', function (e) {
                jQuery('#editor2').addClass('ocultarEditor');
            });

            jQuery('#saveEditor').on('click', function (e) {
            	var HTML = jQuery('#edit').froalaEditor('html.get');

            	jQuery.post(
            		HOME+"/ajax/editor.php",
            		{
            			CONTENIDO: HTML,
            			DOMINIO: jQuery(this).attr("data-dominio"),
            			CLAVE: jQuery(this).attr("data-clave")
            		},
            		function(data){

            			console.log( data );

            			seccionActual.html( HTML );

            			seccionActual = "";

            			jQuery('#edit').froalaEditor('destroy');
                    	jQuery('#edit').addClass('fr-view');
                    	jQuery('#editor').addClass('ocultarEditor');
            		}
            	);

            });

            jQuery('#saveEditor2').on('click', function (e) {
            	var HTML = jQuery('#edit2').val();

            	console.log( HTML );

            	jQuery.post(
            		HOME+"/ajax/editor.php",
            		{
            			CONTENIDO: HTML,
            			DOMINIO: jQuery(this).attr("data-dominio"),
            			CLAVE: jQuery(this).attr("data-clave")
            		},
            		function(data){

            			var selector = jQuery('#saveEditor2').attr("data-selector");
            			var attr = jQuery('#saveEditor2').attr("data-attr");

            			jQuery(selector).attr( "href", HTML );

            			seccionActual = "";

            			jQuery('#editor2').addClass('ocultarEditor');
            		}
            	);

            });

			jQuery('[data-accion="editable"]').on("click", function(e){
				// console.log( jQuery(this).html() );

				seccionActual = jQuery(this);

				jQuery("#saveEditor").attr("data-dominio", jQuery(this).attr("data-dominio") );
				jQuery("#saveEditor").attr("data-clave", jQuery(this).attr("data-clave") );

                jQuery('#editor').removeClass('ocultarEditor');

				jQuery("#edit").html( jQuery(this).html() );
				jQuery('#edit').removeClass('fr-view').froalaEditor();
			});

			jQuery('[data-accion="attr_editable"]').on("click", function(e){
				seccionActual = jQuery(this);

				jQuery("#saveEditor2").attr("data-dominio", jQuery(this).attr("data-dominio") );
				jQuery("#saveEditor2").attr("data-clave", jQuery(this).attr("data-clave") );
				jQuery("#saveEditor2").attr("data-selector", jQuery(this).attr("data-selector") );
				jQuery("#saveEditor2").attr("data-attr", jQuery(this).attr("data-attr") );

                jQuery('#editor2').removeClass('ocultarEditor');

				jQuery("#edit2").val( jQuery( jQuery(this).attr("data-selector") ).attr( jQuery(this).attr("data-attr") ) );
			});
        });
    </script>
<?php } ?>