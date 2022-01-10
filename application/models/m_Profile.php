<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_profile extends CI_Model {
	public function get_profile(){
		$data = $this->db->get('profile');
		return $data->result_array();
	}

	function ubahData($data)
		{
			$id = $this->input->post('id_user');
			$this->db->where('id_user', $id);
			$this->db->update('profile', $data);
			redirect('c_Profile');
		}	
}
