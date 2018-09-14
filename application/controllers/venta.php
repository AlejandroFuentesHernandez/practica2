<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venta extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('venta_model','VM',TRUE);
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('frmVenta');
	}

	/*public function realizar()
	{
		foreach($cliente as $item){
			echo '<option value="item[id_cliente]".$item["nombre_cliente"].</option>';
		}


			



	}*/
	public function cargarcliente()
	{
		$resultado=$this->VM->getCliente();
		foreach ($resultado as $item) {
			echo '<option value="'.$item['id_cliente'].'">'.$item['cliente'].'</option>';
		}
	}

	public function cargarproducto()
	{
		$this->load->model('Venta_model','VM',TRUE);
		$resultado=$this->VM->getProducto();
		foreach ($resultado as $item) {
			echo '<option value="'.$item['id_producto'].'">'.$item['producto'].'</option>';
		}

	
	

	}

	public function ingresarventas()// metodo ingresar datos en la base de datos
	{
		
		$id_cliente=>$this->input->post('nombre_cliente');//ingresar los datos capturados por los input de el frmVenta
		$fecha_venta=>$this->input->post('fecha_venta');
					=>$this->input->post('nombre_producto');
					=>$this->input->post('precio_unitario_producto');
		$total_productos_venta=>$this->input->post('cantidad');
		$total_venta=>$this->input->post('total');

		




		$id_venta=>$this->input->post();
		$id_producto=>$this->input->post();




		

		
	}
	
}
?>
