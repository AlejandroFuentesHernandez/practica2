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
				
			</div><!-- card body-->
			<div class="card-footer"></div>
			</div><!-- card -->
	</div><!-- container-->
	
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


</html>
