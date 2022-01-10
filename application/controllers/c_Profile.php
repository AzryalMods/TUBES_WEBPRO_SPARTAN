<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_Profile extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_Profile');
	}
	public function index()
	{
		$data = [];
		$data['profile']= $this->m_Profile->get_profile();
		$this->load->view('Profile',$data);
	}

	public function ubah(){
		$data = [
			"nama" => $this->input->post('nama'),
			"tanggallahir" => $this->input->post('tanggallahir'),
			"jeniskelamin" => $this->input->post('jeniskelamin'),
			"email" => $this->input->post('email'),
			"nomorhp" => $this->input->post('nomorhp'),
			"alamat" => $this->input->post('alamat')
		];
			$this->m_Profile->ubahData($data, 'user');
			redirect('c_Profile');
	}
}
