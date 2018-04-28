<?php
	$CSSs[] = "/css/index";
	$JSs[] = "/js/index";
?>
<div class="card-body">

	<div class="" >

		<span 
			onclick='abrir_link( jQuery( this ) )' 
			data-id='".$service->id."' 
			data-titulo='Nuevo Cliente' 
			data-modal='new' 
			class='btn btn-primary'
		>Nuevo</span>

	</div>

	<hr>

	<div class="table-responsive">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombres</th>
					<th>Apellidos</th>
					<th>E-mail</th>
					<th>Tel&eacute;fono</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>ID</th>
					<th>Nombres</th>
					<th>Apellidos</th>
					<th>E-mail</th>
					<th>Tel&eacute;fono</th>
					<th>Actions</th>
				</tr>
			</tfoot>
			<tbody></tbody>
		</table>
	</div>
</div>

<a id="abrir_modal" href="#" data-toggle="modal" data-target="#modal"></a>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title" id="modalTitulo"></h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	        	
	      	</div>
	    </div>
    </div>
</div>