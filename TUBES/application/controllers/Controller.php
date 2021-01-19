<?php
class Controller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Catalog_M');
		$this->load->model('Profile_M');
	}

	// kalo ingin ada slider, ubah landing jadi landing2
	// tapi cssnya jadi agak ngaco
	public function index()
	{
		$this->load->view('header');
		$this->load->view('landing');
		$this->load->view('footer');
	}

	public function product(){
		$this->load->view('header');
		$this->load->view('product_V');
		$this->load->view('footer');
	}

	public function sales(){
		$this->load->view('header');
		$this->load->view('sales-network_V');
		$this->load->view('footer');
	}


	public function solution()
	{
		$this->load->view('header');
		$this->load->view('solution_V');
		$this->load->view('footer');
	}

	public function support()
	{
		$this->load->view('header');
		$this->load->view('support_V');
		$this->load->view('footer');
	}

	public function login()
	{
		$data = array(
			'username' => $_POST['username'],
			'password' => $_POST['password']
		);
		if ($this->Profile_M->login($data)) {
			$this->session->set_userdata($data);
			echo "success";
		} 
		else {
			echo "error";
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
	}

	public function register()
	{
		$username = $_POST['username'];
		$pass = $_POST['password'];
		$repass = $_POST['re-password'];
		if ($pass != $repass) {
			echo "Password and Re Enter Password ain't same";
		} else if ($this->Profile_M->check_username($username)) {
			echo 'Username already exist';
		} else {
			$initialize = $this->upload->initialize(array(
				"upload_path" => './assets/profile/',
				"allowed_types" => "jpeg|jpg|png",
				"remove_spaces" => TRUE,
				"file_name" => time() . '-' . $_FILES["uploadImage"]['name']
			));
			if (!$this->upload->do_upload('uploadImage')) {
				echo 'Upload failed';
			} else {
				$data = $this->upload->data();
				$imagename = $data['file_name'];
				$data = array(
					'username' => $username,
					'password' => $pass,
					'profile_pic' => $imagename
				);
				$result = $this->Profile_M->insert_new_profle($data);
				if ($result) {
					echo 'success creating profile';
				} else {
					echo 'Failed creating new profile';
				}
			}
		}
	}

	// CRUD

	public function catalog(){
		$data['item'] = $this->Catalog_M->getAllItem('ddr4_sdram');
		$data['family'] = $this->Catalog_M->getAllItem('product_family');
		$data['tech'] = $this->Catalog_M->getAllItem('product_technology');
		if (isset($_SESSION['username'])) {
			$data['column'] = \array_diff($this->Catalog_M->getColumn('ddr4_sdram'), ["id", "name"]);
			foreach ($data['column'] as $col) {
				$data[$col] = $this->Catalog_M->getColumnData($col, 'ddr4_sdram');
			}
		}
		$this->load->view('header');
		$this->load->view('catalog_V', $data);
		$this->load->view('footer');
	}

	public function getData(){
		$name = $_POST['name'];
		$data = $this->Catalog_M->getItemByName($name, 'ddr4_sdram');
		echo json_encode($data);
	}

	public function addData()
	{
		$data = array(
			"name" => $_POST['name'],
			"density" => $_POST['density'],
			"status" => $_POST['status'],
			"depth" => $_POST['depth'],
			"width" => $_POST['width'],
			"temp" => $_POST['temp'],
			"speed" => $_POST['speed']
		);	
		$state = $this->Catalog_M->tambahData($data, 'ddr4_sdram');
		if ($state){
			$data['state'] = 'new data created';
		}
		else{
			$data['state'] = 'error creating data';
		}
		echo json_encode($data);
	}

	public function editData()
	{
		$id = $_POST['id'];
		$data = array(
			"name" => $_POST['name'],
			"density" => $_POST['density'],
			"status" => $_POST['status'],
			"depth" => $_POST['depth'],
			"width" => $_POST['width'],
			"temp" => $_POST['temp'],
			"speed" => $_POST['speed']
		);	
		$state = $this->Catalog_M->ubahData($id, $data, 'ddr4_sdram');
		if ($state){
			$data['state'] = 'data edited';
		}
		else{
			$data['state'] = 'error editing data';
		}
		echo json_encode($data);
	}

	public function deleteData()
	{
		$id = $_POST['id'];
		$data = $this->Catalog_M->hapusData($id, 'ddr4_sdram');
		if($data){
			echo 'data deleted successfully';
		}
		else{
			echo 'error deleting data';
		}
	}
}