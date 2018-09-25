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
	<div class="container-fluid">
		<!-- car titulo color blanco texto en negro-->
		<div class="row">
			<div class="well well-sm">
		  <div class="card bg-light text-dark">
			<div class="card-header">
				<!-- car titulo  para modulo inventario-->
				<h4 class="card-title">Modulo del inventario</h4>

			</div><!-- encabezado-->
		</div><!--card bg encabezado -->
		</div><!--well pegado borde gris y borde redondeado  //"serverSide": true,//{data": ["nombre_prod"]};  -->

				<h6 class="card-subtitle"> listado de productos</h6>
		<div class="card bg-info text-white">
			<div class="card-body">
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
					<tbody id="showdata">
						
					</tbody>

					
				</table>
				</div><!-- tabla responsive-->
			</div><!-- card body-->

			<div class="card-footer"></div>
		</div><!-- texto fondo blanco-->
		</div><!-- classrow-->
	</div><!-- container-->
	
</body>
<script type="text/javascript">


	$(document).ready(function(){
	 mostrarUsuarios();
	 $('#tabpro').DataTable({
	 	 "ajax": {
	            "url":  "<?php echo site_url();?>/Producto/llenar_tabla_ajax",
	            "dataSrc": ""
	        },
	        "columns": [
	            { "data": "nombre_producto" },
	            { "data": "nombre_tipo" },
	            { "data": "descripcion_producto" },
	            { "data": "nombre_proveedor" },
	            { "data": "stock_minimo_producto" },
	            { "data": "existencias_producto" },
	            { "data": "estado_producto" },
	            { "data": "fecha_caducidad_producto" },
	            { "data": "precio_unitario_producto" }
	        ]
	 });
		
	});
	function mostrarUsuarios()
	{
		
		$ajax({
			type:'ajax',
			"url":"<?php echo base_url() ?>Producto/mostrar"
			dataSrc:"//mostrar_producto?//"

		}),
		"columns":[
		{"data":"nombre_producto"},]


































		/*$.ajax({
			type: 'ajax',
			url: '<?php echo base_url() ?>Producto/mostrar',
			async:false,
			dataType: 'json',
			success: function(data){
				var html = '';
				var i;

				for(i=0;i<data.length;i++)
				{ 
					html += '<tr>'+
							'<td>'+data[i].nombre_producto+'</td>'+
							'<td>'+data[i].nombre_tipo+'<td>'+
							'<td>'+data[i].descripcion_producto+'</td>'+
							'<td>'+data[i].nombre_proveedor+'</td>'+
							'<td>'+data[i].stock_minimo_producto+'</td>'+
							'<td>'+data[i].existencias_producto+'</td>'+
							'<td>'+data[i].estado_producto+'</td>'+
							'<td>'+data[i].fecha_caducidad_producto+'</td>'+
							'<td>'+data[i].precio_unitario_producto+'</td>'*/
							//'<td>'<a href="javascript:;" class="btn btn-success item-view" data="'+data[i].id_producto'"><i class=""></i></a>
							//'</td>'+
							//'<td>'<a href="javascript:;" class="btn btn-info item-edit" data="'+data[i].id_producto'"><i class=""></i></a>'</td>'+
								//'<td>'<a href="javascript:;" class="btn btn-danger item-delete" data="'+data[i].id_producto'"><i class=""></i></a>'</td>'
						'</tr>';
				}
				$('#showdata').html(html);
			},
			error: function()
			{
				alert('No se pudo obtener los datos');
			}
		});
	}
	
</script>
</html>
