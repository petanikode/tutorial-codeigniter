<?php

class Media_model extends CI_Model
{

	private $_table = 'media';

	public function find($id)
	{
		if (!$id) {
			return;
		}

		$query = $this->db->get_where($this->_table, array('id' => $id));
		return $query->row();
	}

	public function insert($media)
	{
		$this->db->insert($this->_table, $media);
	}

	public function update($media)
	{
		if (!isset($media['id'])) {
			return;
		}

		$this->db->update($this->_table, $media, ['id' => $media['id']]);
	}

	public function delete($id)
	{
		if (!$id) {
			return;
		}

		$this->db->delete($this->_table, ['id' => $id]);
	}
}
