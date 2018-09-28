

<script type="text/javascript">


$(document).ready(function()
{
  cargarProveedor();
  cargarTipo();
  
  
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


//PRIMERA FUNCION DE AJAX //CARGA PROVEEDOR// ///
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


//SEGUNDA FUNCION DE AJAX //CARGA TIPO DE PRODUCTO// ///
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

//funcion de guardar// ///
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



//FUNCION AJAX.RELOAD///

table.ajax.reload( function ( json ) {
    $('#myInput').val( json.lastInput );
} );




</script>