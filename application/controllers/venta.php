<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venta extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Venta_model','VM',TRUE); //carga el modelo 
	}

	public function index()
	{
		$this->load->view('url');
		$this->load->view('frmVenta');
	}

	public function cargarcliente()
	{
		$resultado=$this->VM->getCliente();
		foreach ($resultado as $item) {
			echo '<option value="'.$item['id_cliente'].'">'.$item['nombre_cliente'].'</option>';
		}
	}

	public function cargarproducto()
	{
		$resultado=$this->VM->getProducto();
		foreach ($resultado as $item) {
			echo '<option value="'.$item['id_producto'].'">'.$item['nombre_producto'].'</option>';
		}
	}
	
	public function conseguirexistencia()
	{
		$cantidad=$this->input->get('cant');
		$id_producto=$this->input->get('idp');
		echo $this->VM->getExistencias($cantidad,$id_producto);
		/*foreach($resultado as $item) //la diferencia es la manera en la que se ingresar al array
		{
			$item->campo //result
			$item['campo'] //result_array
		}
		/*if($result<$cantidad)
		{
		
			echo 0; //Ajax reconoce todo lo que se le mande por echo
		}else
		{
			echo 1; 
		}*/
	}

	public function precio()
	{
		$id_producto=$this->input->post('id');
		echo $this->VM->getPrecio($id_producto);
		
	}



	public function ingresarventas()// metodo ingresar datos en la base de datos
	{
		
		$id_cliente=$this->input->post('nombre_cliente');//ingresar los datos capturados por los input de el frmVenta
		$fecha_venta=$this->input->post('fecha_venta');
		$id_producto=$this->input->post('nombre_producto');
					
		$total_productos_venta=$this->input->post('cantidad');
		$total_venta=$this->input->post('total');
		

		$resultado=$this->VM->nuevoVenta($id_cliente,$fecha_venta, $id_producto, $total_productos_venta, $total_venta);
		if($resultado==1){
			echo 1;
		}else
		{
			echo 0;
		}


		




		

		
	}
	
}
?>
