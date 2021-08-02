<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_User extends CI_Migration
{

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'VARCHAR',
				'constraint' => 32
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => 32
			),
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => 32
			),
			'avatar' => array(
				'type' => 'VARCHAR',
				'constraint' => 32
			),
			'password' => array(
				'type' => 'VARCHAR',
				'constraint' => 255
			)
		));
		$this->dbforge->add_field('created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP');
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('user');
	}

	public function down()
	{
		$this->dbforge->drop_table('user');
	}
}
