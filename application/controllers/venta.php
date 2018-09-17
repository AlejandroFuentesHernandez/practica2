<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venta extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Venta_model','VM',TRUE);
	}

	public function index()
	{
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
	
	/*public function conseguirexistencia()
	{
		$id_producto=$this->input->get('idp');
		$cantidad=$this->input->get('cant');
		$result=$this->VM->getExistencias($id_producto);
		if($result<$cantidad)
		{
		echo "$cantidad";
			return 0;
		}else
		{
			return 1; 
		}
	}*/

	public function precio()
	{
		$id_producto=$this->input->post('id');
		$resultado=$this->DM->getPrecio($id_producto);
		echo json_encode($resultado);
		//echo "$resultado";
	}



	public function ingresarventas()// metodo ingresar datos en la base de datos
	{
		
		$id_cliente=>$this->input->post('nombre_cliente');//ingresar los datos capturados por los input de el frmVenta
		$fecha_venta=>$this->input->post('fecha_venta');
		$id_producto=$this->input->post('nombre_producto');
					=>$this->input->post('precio_unitario_producto');
		$total_productos_venta=>$this->input->post('cantidad');
		$total_venta=>$this->input->post('total');
		

		echo $this->VM->nuevoVenta($id_cliente,$fecha_venta,$total_productos_venta,$total_venta,$id_producto);


		




		

		
	}
	
}
?>
