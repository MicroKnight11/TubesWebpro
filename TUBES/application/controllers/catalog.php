<?php
class Catalog extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Catalog_M');
	// 	$this->load->library('form_validation');
	}


	public function index()
	{
		
		$this->load->view('header');
		$this->load->view('landing');
		// $this->load->view('test', $data);
		$this->load->view('footer');
	}

	public function tes(){
		$data['item'] = $this->Catalog_M->getAllItem('ddr4_sdram');
		$data['family'] = $this->Catalog_M->getAllFamily();
		$data['tech'] = $this->Catalog_M->getAllTechnology();
		$this->load->view('header');
		$this->load->view('catalog_V', $data);
		$this->load->view('footer');
	}

}