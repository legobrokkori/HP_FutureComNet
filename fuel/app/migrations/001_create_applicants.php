<?php

namespace Fuel\Migrations;

class Create_applicants
{
	public function up()
	{
		\DBUtil::create_table('applicants', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'entrycategory' => array('constraint' => 1, 'type' => 'varchar'),
			'entrydate' => array('type' => 'datetime'),
			'occupation' => array('constraint' => 150, 'type' => 'sting'),
			'applicant' => array('constraint' => 50, 'type' => 'varchar'),
			'sex' => array('constraint' => 1, 'type' => 'varchar'),
			'age' => array('constraint' => 3, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('applicants');
	}
}