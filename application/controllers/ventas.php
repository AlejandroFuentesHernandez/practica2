<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas exteds CI_Controller{

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('frmVenta');
	}
}
?>
