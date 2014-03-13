<?php

class User_model extends CI_Model {
	
	public function checkLogin($username, $pass)
	{
		//$pass = sha1($pass);
		
		$this->db->where(array('username' => $username, 'password' => $pass));
		$query = $this->db->get('User');
		
		if($query->num_rows() == 1){
			return true;
		}
		else{
			return false;
		}
	}
}
	
?>