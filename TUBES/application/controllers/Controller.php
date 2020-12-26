<?php
class Controller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Catalog_M');
		$this->load->model('Profile_M');
	}

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

	public function catalog(){
		$data['item'] = $this->Catalog_M->getAllItem('ddr4_sdram');
		$data['family'] = $this->Catalog_M->getAllFamily();
		$data['tech'] = $this->Catalog_M->getAllTechnology();
		$this->load->view('header');
		$this->load->view('catalog_V', $data);
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
			// $this->load->view('register', $data);
		} else if ($this->Profile_M->check_username($username)) {
			echo 'Username already exist';
			// $this->load->view('register', $data);
		} else {
			$initialize = $this->upload->initialize(array(
				"upload_path" => './assets/profile/',
				"allowed_types" => "jpeg|jpg|png",
				"remove_spaces" => TRUE,
				"file_name" => time() . '-' . $_FILES["uploadImage"]['name']
			));
			if (!$this->upload->do_upload('uploadImage')) {
				// KERJAKAN DISINI
				echo 'Upload failed';
				// $this->load->view('register', $data);
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
					// KERJAKAN DISINI
					echo 'success creating profile';
					// $this->load->view('login', $data);
				} else {
					//KERJAKAN DISINI
					echo 'Failed creating new profile';
					// $this->load->view('register', $data);
				}
			}
		}
	}

}