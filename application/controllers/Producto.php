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
	$this->load->view('producto_view.php');
}

public function mostrar()
{  
    $data['detalle']=$this->inventario->mostrar_producto();
    print_r($data);
    //$this->load->view('',$data);
}

}