<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ventas</title>
   
</head>

<body style="background-color:#0B427C;">

<!-- Modal -->
<div class="modal fade" id="venta" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true"> <!--se elimino el tabindex, el cual tenia la funcion de cerrar el modal con ESC-->
  <div class="modal-dialog" role="document"> <!-- Establece el ancho y el margen del modal-->
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLongTitle">Registro Venta</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form_venta" action="" method="POST"> 
          <!-- Primer campo-->
          <div class="col-md-12 form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> 
            <label for="" class="input-group-addon"> Seleccionar Cliente:</label>
            <select class="form-control" id='nombre_cliente' name="nombre_cliente">
            </select>
                      
          </div>  
           <!-- Segundo campo-->        
          <div class="col-md-12 form-group input-group">
            
            <label for="" class="input-group-addon"> Fecha de Venta:</label>
            <input class="form-control" size="16" type="text"  id="fecha_venta" name="fecha_venta" readonly>
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> 

          </div>                              
          <!-- Tercero campo-->
          <div class="col-md-12 form-group input-group">
            <label for="" class="input-group-addon"> Seleccionar un Producto:</label>
            <select class="form-control" id='nombre_producto' name="nombre_producto" onchange="precio()">
            </select>
          </div>
          <!-- Cuarto campo-->
          <div class="col-md-12 form-group input-group">
            <label for=""  class="input-group-addon"> Precio u.</label>
            <input type="text" id="precio_unitario_producto" name="dprecio_unitario_producto" class="form-control" disabled>
            <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span> 
          </div>
          <!-- Quinto campo-->
          <div class="col-md-12 form-group input-group">
             <label for="" class="input-group-addon"> Cantidad:</label>
             <input type="number" min="1" id="cantidad" name="cantidad" class="form-control" onkeyup="if(this.value==0){this.value='';this.value=1;}" onblur="existencias()">
          </div>
          <!-- sexto campo-->
          <div class="col-md-12 form-group input-group">
            <label for="" class="input-group-addon">Total</label>
            <input type="text" id="total" name="total" class="form-control" readonly="readonly">
          </div>
          
        </form>                 
      </div> <!--cierra body del modal-->

     <div class="modal-footer">
      <!-- limpiar-->
        <a href="<?php echo site_url();?>Venta" class="btn btn-primary">Limpiar</a>
      <!-- Boton Guardar-->
        <button type="button" onclick="guardar()" class="btn btn-success">Guardar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      <!--  <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>

    </div>
  </div>
</div>        
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#venta"> Registro Venta </button> <!--Boton para abir el modal-->
</body>
</html>

<script type="text/javascript">
$(document).ready(function()
{
   $("#fecha_venta").datetimepicker({
    format: 'yyyy-mm-dd hh:ii'
  });
  llenarCliente();
  llenarProducto();
 // modal();
  select();
 // calendario();
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
      if(data=='No'){
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


</script>



