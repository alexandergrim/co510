<?php

class User extends CI_Controller{
	
	public function login()
	{
		$this->load->helper('url');
		$data["wrongDetails"] = false;
		$this->load->view('view_login', $data);
	}
	
	public function doLogin()
	{
		$this->load->model('user_model');
		$this->load->database();
		$this->load->helper('url');		
		
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		if($this->user_model->checkLogin($username, $password)){
			$this->load->library('session');
			$this->session->set_userdata('username', $username);
		
			redirect('/user/view/' .$username);
		}
		else{
		$data["wrongDetails"] = true;
			$this->load->view('view_login', $data); 
		}
		
	}
	
	public function logout()
	{		
		$this->load->library('session');
		$this->session->sess_destroy();
		$this->session->unset_userdata('username');
		
		$this->load->helper('url');
		redirect('/user/login/');
	}
}

?>