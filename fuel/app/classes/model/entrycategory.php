<?php

class Model_Entrycategory extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'name',
	);
	
	// Applicants テーブルとのリレーショナル
	protected static $_belongs_to = array('applicants' => array(
        'model_to' => 'Model_Applicant',
        'key_from' => 'id',
        'key_to' => 'entrycategory',
        'cascade_save' => true,
        'cascade_delete' => false,
	));

	protected static $_table_name = 'entrycategory';

}
