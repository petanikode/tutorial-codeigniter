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
}
