<?php

class FindRecord extends CI_Controller {

	public function index() {
		//Checks if logged in by seeing if their is a session variable for username
		if($this->session->userdata('username')){
			//Loads the template view and passes it the username variable
			$data['username'] = $this->session->userdata('username');
			$this->load->view('view_template', $data);
			
			//Checks whether a search has been made. If so does the search and passes results to the findRecord view
			if(isset($_POST["searchID"])){
				$this->load->model('record_model');
				$this->load->database();
				
				$data["userID"] = $_POST["searchID"];
				
				$foundData['foundData'] = $this->record_model->findRecordWithUser($data);
				
				$this->load->view('view_findRecord', $foundData);
			}
			//else just loads the blank view
			else{
				$this->load->view('view_findRecord');
			}
		}
		else{
			redirect('login');
		}
	}

}

?>