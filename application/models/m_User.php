<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_Model {

	public function login($username, $password)
	{
		$this->db->where('username',$username,'AND', 'password',$password);
		return $this->db->get('user');	
	}

	public function daftarAkun($data)
	{
		return $this->db->insert('user', $data);
	}
}
