<?php

class Feedback_model extends CI_Model
{
	private $_table = "feedback";

	public function insert($feedback)
	{
		if(!$feedback){
			return;
		}

		return $this->db->insert($this->_table, $feedback);
	}

	public function get()
	{
		$query = $this->db->get($this->_table);
		return $query->result();
	}

	public function count(){
		return $this->db->count_all($this->_table);
	}

	public function delete($id)
	{
		if(!$id){
			return;
		}

		$this->db->delete($this->_table, ['id' => $id]);
	}
}
