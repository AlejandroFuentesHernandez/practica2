$(document).ready(function()
{
  llenarCliente();
  llenarProducto();
 // modal();
  select();
  calendario();
  $('#venta').modal("show"); //nos abre el modal sin necesidad de apretar un boton
});

 //Modal
 /*function modal()
 {
  $('#venta').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus')
    });
 }*/

function select(){
  $('#nombre_cliente').select2();
}

function calendario() 
{
  $("#fecha_venta").datetimepicker({
    format: 'yyyy-mm-dd hh:ii'
  });
}

 function operacion()
{
    var uno=parseFloat($('#precio_unitario_producto').val());
    var dos=$('#cantidad').val();
    var multi=uno*dos;
    $('#total').val(multi);
}

function llenarCliente()
{
  $.ajax({
    type:"POST",
    url:'<?php echo site_url();?>Venta/cargarcliente',
    success: function(data)
    {
      $('#nombre_cliente').html('');
      $('#nombre_cliente').html(data);
    }

  });
}

function llenarProducto()
{
  $.ajax ({
    type:"POST",
    url:'<?php echo site_url();?>Venta/cargarproducto',
    success: function(data)
    {
      $('#nombre_producto').html('');
      $('#nombre_producto').html(data);
    }

  });
}



  function precio()
  {
    
     var id=$('#nombre_producto').val();
      $.ajax({                        
        type: "POST",                 
        url:'<?php echo site_url();?>Venta/precio',
        data:'id='+id,
         //dataType:'json',
        success: function(data)             
          {
            $('#precio_unitario_producto').val(data);
                        
          }
      });                
       
  }


 function guardar(){
    $.ajax({
      type:"POST",
      url:'<?php echo site_url();?>Venta/ingresarventas', 
      data: $('#form_venta').serialize(),
      success: function(data)
      {
        if(data==1){
          swal("Datos ingresados exitosamente",'LACAAAAAAAAAAAAAAAAA','success'); 
        }

        if(data==0){
           swal("Laca, no sirve esta onda xD"); 
        }
      }
    });
  }

function existencias(){
  var idp=$('#nombre_producto').val();
  var cant=$('#cantidad').val();
  $.ajax ({
    type:"GET",
    url:'<?php echo site_url();?>Venta/conseguirexistencia',
    data: 'idp='+idp+'&cant='+cant,
    success: function(data){
      if(data==0){
        $('#cantidad').val('');
        swal("Cantidad inexistente",'debe poner algo aqui','error');
        //  $('#cantidad').focus();
      } 
      else 
      {
        operacion();
      }    
    }
  });
}

