<?php
class Catalog_M extends CI_model
{

	public function getAllItem($table)
	{
		return $this->db->get($table)->result_array();
	}

	public function getItemByName($name, $table)
	{
		return $this->db->get_where($table,array('name' => $name))->result();
	}

	public function getColumnData($column, $table)
	{ 
		$this->db->distinct();
		$this->db->select($column);
		$query = $this->db->get($table);
		return $query->result_array();
	}

	public function getColumn($table)
	{
		return $this->db->list_fields($table);
	}

	public function ubahData($id, $data, $table)
	{
		return $this->db->update($table, $data, array('id' => $id));
	}

	public function tambahData($data, $table)
	{
		return $this->db->insert($table, $data);
	}

	public function hapusData($id, $table)
	{
		$state = $this->db->delete($table, array('id' => $id));
		if($state === false){
			return $state;
		}
		else{
			return true;
		}
	}
}
