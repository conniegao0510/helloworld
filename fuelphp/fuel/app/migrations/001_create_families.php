<?php

namespace Fuel\Migrations;

class Create_families
{
	public function up()
	{
		\DBUtil::create_table('families', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name' => array('constraint' => 100, 'type' => 'varchar'),
			'age' => array('constraint' => 11, 'type' => 'int'),
			'role' => array('constraint' => 20, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('families');
	}
}