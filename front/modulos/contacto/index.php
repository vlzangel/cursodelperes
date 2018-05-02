<div class="card">
	<h5 class="card-header">
		PONTE EN CONTACTO CON NOSOTROS
	</h5>
	<div class="card-body">
	
		<form role="form" id="form" >

			<input type="hidden" id="formulario" name="formulario" value="contacto" />

			<span class="info">
				Puedes llamarnos por tel&eacute;fono o enviarnos un mensaje, lo que prefieras.
			</span>

			<div class="form-group">
				<label for="nombre" >Nombre </label>
				<input type="text" class="form-control" id="nombre" name="nombre"  required />
				<div class="val_error">Este campo es obligatorio</div>
			</div>
			
			<div  class="form-group">
				<label for="telefono" >Tel&eacute;fono</label>
				<input class="form-control" type="text" id="telefono" name="telefono" pattern="^[9|8|7|6]\d{8}$" title="Tel&eacute;fono (9 dígitos comenzando por 9, 8, 7 o 6)" required />
				<div class="val_error"></div>
			</div>
			
			<div  class="form-group">
				<label for="email" >Email</label>
				<input 
					class="form-control" 
					type="text" 
					id="email" 
					name="email" 
					title="Ej: ejemplo@mail.com" 
					pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" 
					required
				/>
				<div class="val_error"></div>
			</div>
			
			<div  class="form-group">
				<label for="comentarios" >Mensaje</label>
				<textarea class="form-control" id="comentarios" name="comentarios" required ></textarea>
				<div class="val_error"></div>
			</div>

			<div class="terminos_container checkbox">
		    	<label>
		      		<input type="checkbox" id="terminos" name="terminos" value="si" required />
		      		Conforme con <a href="#" data-toggle="modal" data-target="#exampleModal">la pol&iacute;tica de privacidad</a>
		    	</label>
		  	</div>

			<div class='recaptcha_container center'>
				<div 
					class='g-recaptcha' 
					data-sitekey='6LfCD0oUAAAAAGpjR6_kH2hU14ULSr4OuUDiQWkh'
				></div>
			</div>
		
			<div id="msg" class="alert alert-danger d-none" role="alert"></div>
			
			<hr>

		  	<button type="submit" id="btn-enviar" class="btn btn-primary">Enviar Email</button>

		</form>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title" id="exampleModalLabel">POL&Iacute;TICA DE PRIVACIDAD</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	        	<span>
	        		La presente Pol&iacute;tica de Privacidad establece los t&eacute;rminos en que <strong>LA EMPRESA</strong> usa y protege la informaci&oacute;n que es proporcionada por sus usuarios al momento de utilizar su sitio web. Esta compa&ntilde;&iacute;a est&aacute; comprometida con la seguridad de los datos de sus usuarios. Cuando le pedimos llenar los campos de informaci&oacute;n personal con la cual usted pueda ser identificado, lo hacemos asegurando que s&oacute;lo se emplear&aacute; de acuerdo con los t&eacute;rminos de este documento. Sin embargo esta Pol&iacute;tica de Privacidad puede cambiar con el tiempo o ser actualizada por lo que le recomendamos y enfatizamos revisar continuamente esta p&aacute;gina para asegurarse que est&aacute; de acuerdo con dichos cambios.
				</span>
	      	</div>
	    </div>
    </div>
</div>
