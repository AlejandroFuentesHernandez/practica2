<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ventas</title>
    <script  src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="   crossorigin="anonymous"></script>
    <!-- Bootstrap CDN -->
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--- calendario-->
<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<script src="js/bootstrap-datetimepicker.min.js"></script>
<!--select2-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
</head>



<button type="button" class="btn btn-info" data-toggle="modal" data-target="#venta"> Registro Venta </button>

<!-- Modal -->
<div class="modal fade" id="venta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document"> <!-- Establece el ancho y el margen del modal-->
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLongTitle">Registro Venta</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form_venta" action="<?php //echo site_url(); ?>Venta/FALTAAAA!!!" method="POST"> 
          <!-- Primer campo-->
          <div class="col-md-12 form-group input-group">
            <label for="" class="input-group-addon"> Seleccionar Cliente:</label>
            <select class="form-control" id='nombre_cliente' name="nombre_cliente">
            </select>
                      
          </div>  
           <!-- Segundo campo  <input class="form-control" size="16" type="text"  id="fecha_venta" name="fecha_venta" readonly>-->        
          <div class="col-md-12 form-group input-group">
            <label for="" class="input-group-addon"> Fecha de Venta:</label>
            <input class="form-control" size="16" type="text"  id="fecha_venta" name="fecha_venta" readonly>

          </div>                              
          <!-- Tercero campo-->
          <div class="col-md-12 form-group input-group">
            <label for="" class="js-example-basic-single input-group-addon"> Seleccionar un Producto:</label>
            <select class="form-control" id='nombre_producto' name="nombre_producto">
            </select>
          </div>
          <!-- Cuarto campo-->
          <div class="col-md-12 form-group input-group">
            <label for=""  class="input-group-addon"> Precio u.</label>
            <input type="text" id="precio_unitario_producto" name="dprecio_unitario_producto" class="form-control">
          </div>
          <!-- Quinto campo-->
          <div class="col-md-12 form-group input-group">
             <label for="" class="input-group-addon"> Cantidad:</label>
             <input type="number" min="1" id="cantidad" name="cantidad" class="form-control" onblur="operacion()">
          </div>
          <!-- sexto campo-->
          <div class="col-md-12 form-group input-group">
            <label for="" class="input-group-addon">Total</label>
            <input type="text" id="total" name="total" class="form-control">
          </div>
          <div class="col-md-12 text-center">
          <!-- limpiar-->
            <a href="<?php //echo site_url();?>Venta" class="btn btn-primary">Limpiar</a>
          <!-- Boton Guardar-->
            <button type="submit" class="btn btn-success">Guardar</button>
          </div>
        </form>                 
      </div> <!--cierra body del modal-->

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      <!--  <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>

    </div>
  </div>
</div>        
      
</body>
</html>

<script type="text/javascript">
$(document).ready(function()
{
  //llenarCliente();
  //llenarProducto();
  modal();
  select();
  $("#fecha_venta").datepicker({
    format: 'yyyy-mm-dd'
  });
  operacion();

})

 //Modal
 function modal()
 {
  $('#venta').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus')
    });
 }

function select(){
  $('#nombre_producto').select2();
}

function calendario() 
{
  $("#fecha_venta").datepicker({
    format: 'yyyy-mm-dd'
  });
}

 function operacion()
{
    var uno=parseInt($('#precio_unitario_producto').val());
    var dos=parseInt($('#cantidad').val());
    var multi=uno*dos;
    $('#total').val(multi);
}

function llenarCliente()
{
  $.ajax
  ({
    type:"POST",
    url:'<?php //echo site_url(); ?> Venta/cargarcliente',
    success: function(data)
    {
      $('#nombre_cliente').html(data);
    }

  });
}

function llenarProducto()
{
  $.ajax
  ({
    type:"POST",
    url:'<?php //echo site_url(); ?> Venta/cargarproducto',
    success: function(data)
    {
      $('#nombre_producto').html(data);
    }

  });
}

function existencias(){
  $.ajax ({
    type:"GET",
    url:'<?php //echo site_url(); ?> Venta/existencias',
    data: 
    success: function(data){
      $('#cantidad').val()
      alert('se puede comprar')
    }
  });
}



</script>

<!--Calendario <input size="16" type="text" class="form-control" id="datetime" readonly>-->

