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
	<div id="header1"></div>
	<div id="container" class="container" >
			
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
				<aside>
				</aside>
				<aside id="menu">
						
				</aside>
				
	<!-- container--></div>
	
<!-- modal-->
<div class="modal fade" id="Producto" tabindex="6" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title" id="exampleModalLongTitle">Agregar Productos</h1><!--modal-title-->
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
						<!-- nombre producto-->
						<div class="col-md-12 form-group input-group">
							<label for="" class="input-group-addon">Nombre Producto:</label>
							<input type="text" id="nombre_producto" name="nombre_producto" placeholder="Nombre" class="form-control">
						</div>
						<!-- tipo producto-->
						<div class="col-md-12 form-group input-group">
							<label for="" class="input-group-addon">Tipo producto:</label>
							<select id="id_tipo_producto" name="id_tipo_producto" placeholder="Perecedero"class="form-control"></select>
						</div>
						<!-- descripcion-->
						<div class="col-md-12 form-group input-group">
							<label for="" class="input-group-addon">Descripcion producto:</label>
							<textarea id="descripcion_producto" name="descripcion_producto" class="form-control"></textarea>
						</div>
						<!-- id proveedor-->
						<div class="col-md-12 form-group input-group">
							<label for="" class="input-group-addon">Proveedor:</label>
							<select id="id_proveedor_producto" name="id_proveedor_producto" placeholder="Proveedor" class="form-control"></select>
						</div>
						<!--stock -->
						<div class="col-md-12 form-group input-group">
							<label for="" class="input-group-addon">Stock minimo</label>
							<input type="number" id="stock_minimo_producto" name="stock_minimo_producto" min="0" placeholder=" minimo 0" class="form-control">
						</div>
						<!-- existencia-->
						<div class="col-md-12 form-group input-group">
							<label for="" class="input-group-addon">Cantidad:</label>
							<input type="number"  id="existencias_producto" name="existencias_producto" min="0"placeholder="Minimo 0"class="form-control">
						</div>
						<!-- estado-->
						<div class="col-md-12 form-group input-group">
							<label for="" class="input-group-addon">Estado Producto</label>
							<select id="estado_producto" name="estado_producto" class="form-control">
								<option value="1">Activo</option>
								<option value="0">Inactivo</option>
							</select>
						</div>
						<!-- fecha caducidad-->
						<div class="col-md-12 form-group input-group">
							<label for="" class="input-group-addon">Fecha caducidad</label>
							<input type="date" id="fecha_caducidad_producto" name="fecha_caducidad_producto" class="form-control">
						</div>
						<!-- precio unitario-->
						<div class="col-md-12 form-group input-group">
							<label for="" class="input-group-addon">Precio Unitario</label>
							<input type="number" id="precio_unitario_producto" name="precio_unitario_producto" min="0" placeholder="Minimo 0" class="form-control">
						</div>
						<!-- button-->
						<div class="col-md-12 form-control input-group">
							<!-- vaciar-->
							<a href="<?php echo site_url();?>producto_view" class="btn btn-primary">Vaciar</a>
							<!-- button-->
							<button type="button" onclick="guardar()" class="btn btn-success">Guardar</button>

							<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
						</div>
					</form><!-- form-->
				</div><!--modal body -->
				
		</div><!-- modal-content -->
	</div><!--modal-dialog-->
</div><!-- modal fade-->








</body>

<script type="text/javascript">

$(document).ready(function()
{
    $('#tabpro').DataTable({//mostrar las columnas de abajo en el formulario
       "ajax": {
              "url":  "<?php echo site_url();?>/Producto/mostrar",//conexion con el modelo
              "dataSrc": ""//mostrar en bloque los datos consltado
             
          },
           "scrolly": "200px",
              "scrollCollapse": false,
              "paging": true,
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
cargarProveedor();
cargarTipoProducto();
 
});

$('#Producto').on('shown.bs.modal',function(){
 $('#myInput').trigger('focus')
  });

function cargarProveedor()
{
  $.ajax({
    type:"POST",
    url:'<?php echo site_url();?>Producto/cargar_proveedor',
    success: function(data)
    {
      $('#id_proveedor_producto').html('');
      $('#id_proveedor_producto').html(data);
    }

  });
}

function cargarTipoProducto()
{
  $.ajax({
    type:"POST",
    url:'<?php echo site_url();?>Producto/cargar_tipo',
    success: function(data)
    {
      $('#id_tipo_producto').html('');
      $('#id_tipo_producto').html(data);
    }

  });
}

function guardar(){
    $.ajax({
      type:"POST",
      url:'<?php echo site_url();?>Producto/guardar', 
      data: $('#productoform').serialize(),
      success: function(data)
      {
        if(data==1){
          swal("Datos ingresados exitosamente",'Exito','success'); 
        }

        if(data==0){
           swal("Error al ingresar los datos"); 
        }
      }
    });
  }



</script>

</html>
