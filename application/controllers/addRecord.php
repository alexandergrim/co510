<?php

class AddRecord extends CI_Controller {

	public function index() {
		if($this->session->userdata('username')){
			$data['username'] = $this->session->userdata('username');
			$this->load->view('view_template', $data);
			$this->load->view('view_addRecord');
		}
		else{
			redirect('login');
		}
	}
}

?>