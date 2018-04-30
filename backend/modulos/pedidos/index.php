<div class="card-body">

	<div class="" >

		<span 
			onclick='abrir_link( jQuery( this ) )' 
			data-id='".$service->id."' 
			data-titulo='Nuevo Pedido' 
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
					<th>Nombre</th>
					<th>NIF</th>
					<th>E-mail</th>
					<th>Tel&eacute;fono</th>
					<th>Estatus</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>NIF</th>
					<th>E-mail</th>
					<th>Tel&eacute;fono</th>
					<th>Estatus</th>
					<th>Actions</th>
				</tr>
			</tfoot>
			<tbody></tbody>
		</table>
	</div>
</div>

<?php include dirname(__DIR__).'/modal.php'; ?>