<?php

class FindRecord extends CI_Controller {

	public function index() {
		$this->load->view('view_template');
		$this->load->view('view_findRecord');
	}
}

?>