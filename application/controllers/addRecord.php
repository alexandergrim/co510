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
	
	public function add(){
		$this->load->model('record_model');
		$this->load->database();
		
		$genData["userID"] = $_POST["userID"];
		$genData["recordType"] = $_POST["recordType"];
		$genData["dateCreated"] = date("Y-m-d");
		$genData["dateModified"] = date("Y-m-d");

		$recordData["recordID"] = $this->record_model->addRecord($genData);
			
		switch($genData["recordType"]) {
			case "initial":
				$recordData["startDate"] = $_POST["startDate"];
				$recordData["interviewAccount"] = "";
				$recordData["interviewer"] = $_POST["interviewer"];
				$recordData["initialSection"] = $_POST["initialSection"];
				$recordData["initialRole"] = $_POST["initialRole"];
				$recordData["initialSalary"] = $_POST["initialSalary"];

				$this->record_model->addInitialRecord($recordData);
				break;
		}
			
		redirect('addRecord');
		
	}
}

?>