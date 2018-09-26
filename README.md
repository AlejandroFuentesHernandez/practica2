# practica2
jquery

//"serverSide": true,//{data": ["nombre_prod"]}; 
<!-- 	<tbody id="showdata">
						
					</tbody>
 -->
//mostrarUsuarios();
/*function mostrarUsuarios()
	{
		
		$.ajax({
			"ajax":,//hereda todas las opcione disponibles por jquery
			"url":"<?php echo base_url() ?>Producto/mostrar"
			"dataSrc":""//para alterar que dtaos leera el json
			"data":{
			"user_id": #showdata
		}

		}),
			
	}
	$.ajax({
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
							'<td>'+data[i].precio_unitario_producto+'</td>'
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
		});*/
