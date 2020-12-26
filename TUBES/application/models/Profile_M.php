<?php
class Profile_M extends CI_Model
{

	public function check_username($username)
	{
		$condition = "username =" . "'" . $username . "'";
		$this->db->select('*');
		$this->db->from('profile');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}

	public function login($data)
	{

		if ($this->check_username($data['username'])){
			$condition = "password =" . "'" . $data['password'] . "' AND username =". "'" . $data['username'] . "'";
			$this->db->select('*');
			$this->db->from('profile');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();
			if ($query->num_rows() == 1) {
				return true;
			} else {
				return false;
			}
		}
	}

	public function insert_new_profle($data)
	{
		return $this->db->insert('profile', $data);
	}

	public function get_profile($username)
	{
		return $this->db->get_where('profile', array('username' => $username))->row_array();
	}
}
