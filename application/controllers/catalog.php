<?php
class Catalog extends CI_Controller
{

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('Mahasiswa_model');
	// 	$this->load->library('form_validation');
	// }


	public function index()
	{
		// $this->load->view('header');
		$this->load->view('catalog_V');
		$this->load->view('footer');
	}

}