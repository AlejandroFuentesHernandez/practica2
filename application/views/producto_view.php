<?php
/*
id_producto
nombre_producto
id_tipo_producto
descripcion_producto
id_proveedor_producto
stock_minimo_producto
existencias_producto
estado_producto
fecha_caducidad_producto
precio_unitario_producto



<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/bootstrap.min.css">

*/
//include 'url_boot.php';
?>
<!DOCTYPE html>

<html>
<head>
	<title>Tabla productos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-witdth, inicial-scale=1,shrink-to-fit=no">
</head>
<body>
	<div id="container" class="container">
		  <div class="card bg-info text-white"><!-- car titulo color blanco texto en negro   style="background-color: #ffccff"-->
			<div class="card-header">
				<!-- car titulo  para modulo inventario-->
				<h2 class="card-title">Modulo del inventario</h2>
				<h3 class="card-subtitle" > listado de productos</h3>
				<!-- carta azul contenedor de la data table-->
			</div><!-- encabezado-->		
		
			<div class="card-body">
				
				<!--<div class="table-responsive"></div>-->
				<div align="right">
					<!--<button type="submit" id="" name="" class="btn btn-primary  gryphicon glyphicon-plus"  data-toggle=""data-target="">+Insertar</button>-->
					<a href="#Producto" data-toggle="modal" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-plus"  ></span>Producto</a>
				</div>
				<table id="tabpro" border="1" class="dataTables_wrapper no-footer">
					<thead>
						<tr>
							<!--<th style="" scope="">Id_producto</th>-->
							<th style="" scope="">Nombre Producto</th>
							<th style="" scope="">Tipo producto</th>
							<th style="" scope="">Descripcion producto</th>
							<th style="" scope="">Proveedor</th>
							<th style="" scope="">Stock minimo </th>
							<th style="" scope="">Existencia</th>
							<th style="" scope="">Estado </th>
							<th style="" scope="">Fecha caducidad</th>
							<th style="">Precio unitario</th>
							
						</tr>
					</thead>
				</table>
				<!--<div>-->
				
			</div><!-- card body-->
			<div class="card-footer"></div>
			</div><!-- card -->
	<!-- container--></div>
	
<!-- modal-->
<div class="modal fade" id="Producto" tabindex="6" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title" id="">Agregar Productos</h1><!--modal-title-->
					<button type="button" class="close" data-dismiss="modal" arial-label="close">
						<span aria-hidden="true">&times;</span>
					</button><!-- close-->
			</div><!-- modal-header-->
				<div class="modal-body">
					<form id="productoform" action="<?php echo site_url();?>/" method="POST">
						<!--<div>
							<label>Id producto</label>
							<input type="" name="">
						</div>-->
						<div>
							<label>Nombre Producto:</label>
							<input type="text" id="nombre_producto" name="nombre_producto">
						</div>
						<div>
							<label>ID tipo producto:</label>
							<select id="id_tipo_producto" name="id_tipo_producto"></select>
						</div>
						<div>
							<label>Descripcion producto</label>
							<textarea id="descripcion_producto" name="descripcion_producto"></textarea>
						</div>
						<div>
							<label>Id proveedor producto</label>
							<select type="id_proveedor_producto" name="id_proveedor_producto"></select>
						</div>
						<div>
							<label>Stock minimo producto</label>
							<input type="number" id="stock_minimo_producto" name="stock_minimo_producto">
						</div>
						<div>
							<label>Existencia producto</label>
							<input type="text"  id="existencias_producto" name="existencias_producto">
						</div>
						<div>
							<label>Estado Producto</label>
							<select id="estado_producto" name="estado_producto">
								<option value="1">Habilitado</option>
								<option value="0">Inhabilidad</option>
							</select>

						</div>
						<div>
							<label>Fecha caducidad producto</label>
							<input type="date" id="fecha_caducidad_producto" name="fecha_caducidad_producto">
						</div>
						<div>
							<label>Precio Unitario producto</label>
							<input type="number" id="precio_unitario_producto" name="precio_unitario_producto">
						</div>
						<div>
							<!-- vaciar-->
							<a href="<?php echo site_url();?>Producto">Vaciar</a>
							<!-- button-->
							<button type="button" onclick="">Guardar</button>
						</div>
					</form><!-- form-->
				</div><!--modal body -->
				
		</div><!-- modal-content -->
	</div><!--modal-dialog-->
</div><!-- modal fade-->








</body>
<script type="text/javascript">


	$(document).ready(function(){
	 
	 $('#tabpro').DataTable({//mostrar las columnas de abajo en el formulario
	 		 "ajax": {
	            "url":  "<?php echo site_url();?>/Producto/mostrar",//conexion con el modelo
	            "dataSrc": ""//mostrar en bloque los datos consltado
	           
	        },
	         "scrolly": "200px",
	            "scrollCollapse": false,
	            "paging": false,
	            "responsive":true,
	        "columns":[
					{"data":"nombre_producto"},
					{"data":"nombre_tipo"},
					{"data":"descripcion_producto"},
					{"data":"nombre_proveedor"},
					{"data":"stock_minimo_producto"},
					{"data":"existencias_producto"},
					{"data":"estado_producto"},
					{"data":"fecha_caducidad_producto"},
					{"data":"precio_unitario_producto"}
				],
			"dom": 'Bfrtip',
			"buttons": [
	        		'copyHtml5', {extend: 'pdfHtml5',download:'open'}, 'excelHtml5'
	        	]

	 });		
});
	
</script>
<script>
	$('#Producto').on('shown.bs.modal',function(){
		$('#myInput').trigger('focus')
	});
</script>

</html>
