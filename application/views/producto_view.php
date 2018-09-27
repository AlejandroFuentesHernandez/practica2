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
<!-- visualizacion css-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



*/
//include 'url_boot.php';
?>
<!DOCTYPE html>

<html>
<head>
	<title>Tabla productos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-witdth, inicial-scale=1,shrink-to-fit=no">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/jquery.dataTables.min.css">

<!-- jquery min -->
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-3.3.1.js"></script>
<!-- data table css -->
<script type="text/javascript" src="<?php echo base_url()?>/js/jquery.dataTables.min.js"></script>
<!-- ajax--->
<script type="text/javascript" src="<?php echo base_url()?>/js/popper.min.js"></script>
<!-- max -->
<script type="text/javascript" src="<?php echo base_url()?>/js/bootstrap.min.js"></script>
<!--buton-->
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>

<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>

<!-- css buton-->
<!--flexiblible-->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">

<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/Style_producto.css">-->

</head>
<body>
	<div class="container">
		  <div class="card bg-light text-dark"><!-- car titulo color blanco texto en negro   style="background-color: #ffccff"-->
			<div class="card-header">
				<!-- car titulo  para modulo inventario-->
				<h4 class="card-title">Modulo del inventario</h4>
			</div><!-- encabezado-->		
		
			<div class="card-body">
				<h4 class="card-subtitle"> listado de productos</h4><!-- carta azul contenedor de la data table-->
				
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
				<!-- tabla responsive-->
			</div><!-- card body-->
			<div class="card-footer"></div>
			</div><!-- center-->
		<!-- texto fondo blanco-->
		<!--card bg encabezado -->
		<!--well pegado borde gris y borde redondeado   -->
		<!-- card -->
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
