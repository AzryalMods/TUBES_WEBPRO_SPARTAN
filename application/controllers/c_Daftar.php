<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_Daftar extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_User');
    }
	public function index()
	{
		$this->load->view('Daftar');
	}

    public function daftarUser()
    {
        $data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email')
		);
        $this->m_User->daftarAkun($data);
        redirect('c_login/index');
    }
}
