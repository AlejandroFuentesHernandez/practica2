<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller{

public function __construct()
{
	parent::__construct();
	$this->load->model('Producto_model','PM',TRUE); 

}

public function index()
{
	$this->load->view('url_include_producto');
	
	$this->load->view('producto_view.php');
}

public function mostrar()
{  
    $data=$this->PM->mostrar_producto();
   echo json_encode($data);
    //print_r($data);
}

public function cargar_proveedor()
{
  $resultado=$this->PM->getProveedor();
  foreach ($resultado as $item) {
      echo '<option value="'.$item['id_proveedor'].'">'.$item['nombre_proveedor'].'</option>';
    }
    
}
 
public function cargar_tipo()
{
  $resultado=$this->PM->get_tipo();
  foreach ($resultado as $item) {
      echo '<option value="'.$item['id_tipo'].'">'.$item['nombre_tipo'].'</option>';
    }
    
}

public function guardar()
{
    $nombre_producto=$this->input->post('nombre_producto');
    $id_tipo_producto=$this->input->post('id_tipo_producto');
    $descripcion_producto=$this->input->post('descripcion_producto');
    $id_proveedor_producto=$this->input->post('id_proveedor_producto');
    $stock_minimo_producto=$this->input->post('stock_minimo_producto');
    $existencias_producto=$this->input->post('existencias_producto');
    $estado_producto=$this->input->post('estado_producto');
    $fecha_caducidad_producto=$this->input->post('fecha_caducidad_producto');
    $precio_unitario_producto=$this->input->post('precio_unitario_producto');
    
    $data=array
    (
      'nombre_producto'=>$nombre_producto,
      'id_tipo_producto'=>$id_tipo_producto,
      'descripcion_producto'=>$descripcion_producto,
      'id_proveedor_producto'=>$id_proveedor_producto,
      'stock_minimo_producto'=>$stock_minimo_producto,
      'existencias_producto'=>$existencias_producto,
      'estado_producto'=>$estado_producto,
      'fecha_caducidad_producto'=>$fecha_caducidad_producto,
      'precio_unitario_producto'=>$precio_unitario_producto,     

    );

    $resultado=$this->PM->guardar_producto($data);
    if($resultado==1){
      echo 1;
    }else {
      echo 0;
    }
}


}

/*



*/