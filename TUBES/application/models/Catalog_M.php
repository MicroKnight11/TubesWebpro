<?php
class Catalog_M extends CI_model
{

	public function getAllItem($table)
	{
		return $this->db->get($table)->result_array();
	}

	public function getAllFamily()
	{
		return $this->db->get('product_family')->result_array();
	}

	public function getAllTechnology()
	{
		return $this->db->get('product_technology')->result_array();
	}

	// public function getIdByFamilyName($name)
	// { 
	// 	return $this->db->get_where('product_family', array('name' => $name))->row_array();
	// }

	// public function getTechByFamily($family)
	// {
	// 	return $this->db->get('')->result_array();
	// }

	// public function tambahDataMahasiswa()
	// {
	// 	$data = [
	// 		"nama" => $this->input->post('nama', true),
	// 		"nim" => $this->input->post('nim', true),
	// 		"email" => $this->input->post('email', true),
	// 		"jurusan" => $this->input->post('jurusan', true),
	// 	];

	// 	//use query builder to insert $data to table "mahasiswa"
	// 	$this->db->insert('mahasiswa', $data);
	// }

	// public function hapusDataMahasiswa($id)
	// {
	// 	//use query builder to delete data based on id 
	// 	$this->db->delete('mahasiswa', array('id' => $id));
	// }

	// public function getMahasiswaById($id)
	// {
	// 	//get data mahasiswa based on id 
	// 	return $this->db->get_where('mahasiswa', array('id' => $id))->row_array();
	// }

	// public function ubahDataMahasiswa($id)
	// {
	// 	$data = [
	// 		"nama" => $this->input->post('nama', true),
	// 		"nim" => $this->input->post('nim', true),
	// 		"email" => $this->input->post('email', true),
	// 		"jurusan" => $this->input->post('jurusan', true),
	// 	];
	// 	//use query builder class to update data mahasiswa based on id
	// 	$this->db->update('mahasiswa', $data, array('id' => $id));
	// }

	// public function cariDataMahasiswa()
	// {
	// 	$keyword = $this->input->post('keyword', true);
	// 	//use query builder class to search data mahasiswa based on keyword "nama" or "jurusan" or "nim" or "email"

	// 	$this->db->like('nama', $keyword);
	// 	$this->db->or_where('jurusan', $keyword);
	// 	$this->db->or_where('nim', $keyword);
	// 	$this->db->or_where('email', $keyword);
	// 	$data = $this->db->get('mahasiswa');

	// 	//return data mahasiswa that has been searched
	// 	return $data->result_array();
	// }
}
