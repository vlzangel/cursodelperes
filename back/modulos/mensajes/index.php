<link href="<?php echo HOME(); ?>recursos/css/mensajes.css?v=<?php echo time(); ?>" rel="stylesheet">
<div class="card-body">
	<div class="table-responsive">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>E-mail</th>
					<th>Tel&eacute;fono</th>
					<th>Estatus</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>E-mail</th>
					<th>Tel&eacute;fono</th>
					<th>Estatus</th>
					<th>Acciones</th>
				</tr>
			</tfoot>
			<tbody></tbody>
		</table>
	</div>
</div>

<?php include dirname(__DIR__).'/modal.php'; ?>