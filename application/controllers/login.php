<?php
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		// Load class Model_pengurus
		$this->load->model("Model_admin");
		$this->load->library('session');
	}

	function index()
	{
		$data['judul']="Login Komunitas";
		$this->load->view('view_login', $data);

	}
	function cek(){
		$username=$this->input->post('username', true);
		$password=$this->input->post('password', true);
		$cek=$this->Model_admin->cek_login($username,$password);
		if($cek == TRUE) {
			$data=array('username'=>$username, 'logged_in'=> TRUE);
			$this->session->set_userdata($data);
			redirect('pengurus');
		}else{
			redirect('login', refresh);
		}

	}
	function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('login');
	}
}