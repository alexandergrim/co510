<?php

class ViewRecord extends CI_Controller {

	public function index() 
	{
		//Checks if logged in by seeing if their is a session variable for username
		if($this->session->userdata('username')){
			//Loads the template view and passes it the username variable
			$data['username'] = $this->session->userdata('username');
			$this->load->view('view_template', $data);
			$this->load->view('view_viewRecord');
		}
		else{
			redirect('login');
		}
	}
	
	public function view($id) 
	{
		$this->load->model('record_model');
		$this->load->database();
				
		$queryResult = $this->record_model->findRecordWithID($id);
		
		foreach($queryResult->result() as $row){
			echo $row->userID;
		}
	}

}

?>