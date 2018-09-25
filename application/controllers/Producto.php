<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venta extends CI_Controller{

public function __construct()
{
	parent::__construct();
	$this->load->model('Producto_model','PM',TRUE); 

}

public function index()
{
	$this->load->view('producto_view.php');
}



}