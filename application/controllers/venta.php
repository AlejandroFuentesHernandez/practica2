<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas extends CI_Controller{


	public function error()
	{
		$this->load->helper('url');
		$this->load->view('error');
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


			Input 1--- nombre_cliente
2.       Input 2--- fecha_venta
3.       Input 3--- nombre_producto
4.       Input 4--- precio_unitario_producto
5.       Input 5--- cantidad
6.       Input 6--- total



	}*/
	public function cargarcliente()
	{
		$this->load->model('');
		$resultado=$this->DM->llenarcliente();
		foreach ($resultado as $item) {
			echo '<option value="'.$item['id_cliente'].'">'.$item['cliente'].'</option>';
		}
	}

	public function cargarproducto()
	{

	}
}
?>
