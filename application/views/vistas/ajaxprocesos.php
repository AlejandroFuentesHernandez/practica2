
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
