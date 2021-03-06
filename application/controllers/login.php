<?php

class Login extends CI_Controller {

	public function index() {
		if($this->session->userdata('username')){
			redirect('addRecord');
		}
		else{
			$this->load->view('view_login');
		}
	}
	
	public function doLogin()
	{
		$this->load->model('user_model');
		$this->load->database();
		
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		if($this->user_model->checkLogin($username, $password)){
			$this->session->set_userdata('username', $username);
		
			redirect('addRecord');
		}
		else{
			$this->load->view('view_login', $data); 
			echo "Wrong username";
			echo $username;
		}
	}
	
	public function logout()
	{		
		$this->load->library('session');
		$this->session->sess_destroy();
		$this->session->unset_userdata('username');
		
		$this->load->helper('url');
		redirect('login/');
	}
}

?>