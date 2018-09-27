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

}

/*



*/