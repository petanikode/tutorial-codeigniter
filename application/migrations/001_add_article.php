<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_Article extends CI_Migration
{

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'VARCHAR',
				'constraint' => 32
			),
			'title' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => TRUE
			),
			'content' => array(
				'type' => 'TEXT',
				'null' => TRUE
			),
			'draft' => array(
				'type' => 'TINYINT',
				'default' => 1
			)
		));
		$this->dbforge->add_field('created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP');
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('article');
	}

	public function down()
	{
		$this->dbforge->drop_table('article');
	}
}
