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
		$this->load->view('frmVentas');
	}

	
}
?>
