<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');
	class m_List extends CI_Model 
	{
		function getAllProduk()
		{
			$data = $this->db->get('list_db');
			return $data->result_array();
		}	

		public function hapusbarang(){
			$kode = $this->input->post('id_list');
			$this->db->where('id_list', $kode);
			$this->db->delete('list_db');
			redirect('c_List');
		}

		function editbarang($data){
			$kode = $this->input->post('id_list');
			$this->db->where('id_list', $kode);
			$this->db->update('list_db', $data);
			redirect('c_List');
		}
	}
?>
