<?php

class Article_model extends CI_Model
{

	private $_table = 'article';

	public function find($id)
	{
		if (!$id) {
			return;
		}

		$query = $this->db->get_where($this->_table, array('id' => $id));
		return $query->row();
	}

	public function insert($article)
	{
		$this->db->insert($this->_table, $article);
	}

	public function update($article)
	{
		if (!isset($article['id'])) {
			return;
		}

		$this->db->update($this->_table, $article, ['id' => $article['id']]);
	}

	public function delete($id)
	{
		if (!$id) {
			return;
		}

		$this->db->delete($this->_table, ['id' => $id]);
	}
}
