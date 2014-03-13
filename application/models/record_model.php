<?php

class Record_model extends CI_Model {
	
	public function addRecord($data)
	{
		$this->db->insert('Records', $data);
		return $this->db->insert_id();
	}
	
	public function addInitialRecord($data)
	{
		$this->db->insert('InitialEmployment', $data);
	}
	
	public function findRecordWithUser($data)
	{
		$this->db->where(array('userID' => $data['userID']));
		$query = $this->db->get('Records');

		if($query->num_rows() >= 1){
			return $query;
		}
		else{
			echo "NO RESULTS FOUND";
		}
	}
	
	public function findRecordWithID($id)
	{
		$this->db->where(array('recordId' => $id));
		$query = $this->db->get('Records');

		if($query->num_rows() >= 1){
			return $query;
		}
		else{
			echo "NO RESULTS FOUND";
		}
	}
}
	
?>