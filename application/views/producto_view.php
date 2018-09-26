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

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

*/
//include 'url_boot.php';
?>
<!DOCTYPE html>

<html>
<head>
	<title>Tabla productos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-witdth, inicial-scale="1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>
	<div class="container">
		<div class="row">
			<div class="well well-sm">
		  <div class="card bg-light text-dark"><!-- car titulo color blanco texto en negro-->
			<div class="card-header">
				<!-- car titulo  para modulo inventario-->
				<h4 class="card-title">Modulo del inventario</h4>
			</div><!-- encabezado-->		
		<div class="card bg-info text-white">
			<div class="card-body">
				<h4 class="card-subtitle"> listado de productos</h4><!-- carta azul contenedor de la data table-->
				<div class="table-responsive">
				<table id="tabpro" border="1" class="display" style="width: 100%">
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
				</div><!-- tabla responsive-->
			</div><!-- card body-->

			<div class="card-footer"></div>
		</div><!-- texto fondo blanco-->
		</div><!--card bg encabezado -->
		</div><!--well pegado borde gris y borde redondeado   -->
		</div><!-- classrow-->
	</div><!-- container-->
	
</body>
<script type="text/javascript">


	$(document).ready(function(){
	 
	 $('#tabpro').DataTable({
	 		 "ajax": {
	            "url":  "<?php echo site_url();?>/Producto/mostrar",
	            "dataSrc": ""
	        },
	        "columns":[
		{"data":"nombre_producto"},
		{"data":"nombre_tipo"},
		{"data":"descripcion_producto"},
		{"data":"nombre_proveedor"},
		{"data":"stock_minimo_producto"},
		{"data":"existencias_producto"},
		{"data":"estado_producto"},
		{"data":"fecha_caducidad_producto"},
		{"data":"precio_unitario_producto"}]
	 });
		
	});
	
</script>
</html>
