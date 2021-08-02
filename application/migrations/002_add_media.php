<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_Media extends CI_Migration
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
			'file_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 32
			),
		));
		$this->dbforge->add_field('created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP');
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('media');
	}

	public function down()
	{
		$this->dbforge->drop_table('media');
	}
}
