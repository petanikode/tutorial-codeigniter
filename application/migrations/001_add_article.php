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
			),
			'slug' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
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
		if ($this->dbforge->create_table('article')) {
			printf("✅ Table `article` created\n");
		}
	}

	public function down()
	{
		if ($this->dbforge->drop_table('article')) {
			printf("❌ Table `article` deleted\n");
		}
	}
}
