<?php
defined('BASEPATH') OR exit('No direct script access alowed');
	class c_List extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('m_List');	
		}
		public function index(){
			$data['dataProduk']= $this->m_List->getAllProduk();
			$this->load->view('List', $data);
		}

		public function update(){
			$data = [
				"nama_barang" => $this->input->post('namaProduk'),
				"jumlah_barang" => $this->input->post('jumlahBarang')
			];
			$this->m_List->editbarang($data, 'list_db');
			redirect('c_List');
		}

		public function hapus(){
			$this->m_List->hapusbarang('id_list');
			redirect('c_List');
		}
	}
?>