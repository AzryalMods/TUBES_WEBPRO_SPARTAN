<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('m_User');
	
	}
	public function index()
	{
		$this->load->view('Login');
	}
	public function dashboard()
	{
		$this->load->view('dashboard');
	}
	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$query = $this->m_User->login($username, $password);
		$user = $query->row();

		if (!$user) return FALSE;
		if (!password_verify($password, $user->password)) return FALSE;


		redirect('dashboard');
	}
}
