<?php

class Profile_model extends CI_Model
{
	private $_table = "user";

	public function profile_rules()
	{
		return [
			[
				'field' => 'name',
				'label' => 'Name',
				'rules' => 'required|max_length[32]'
			],
			[
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required|max_length[32]'
			],
		];
	}

	public function password_rules()
	{
		return [
			[
				'field' => 'password',
				'label' => 'New Password',
				'rules' => 'required'
			],
			[
				'field' => 'password_confirm',
				'label' => 'Password Confirmation',
				'rules' => 'required|matches[password]'
			],
		];
	}

	public function update($data)
	{
		if (!$data['id']) {
			return;
		}
		return $this->db->update($this->_table, $data, ['id' => $data['id']]);
	}
}
