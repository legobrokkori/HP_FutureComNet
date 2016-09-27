<?php
class Model_Applicant extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'entrycategory',
		'entrydate',
		'occupation',
		'applicant',
		'applicantkana',
		'sex',
		'birthdate',
		'age',
		'postCode1',
		'postCode2',
		'adressprefectural',
		'adressmunicipality',
		'adressstreet',
		'telno',
		'mailadress',
		'skillExcell',
		'skillWord',
		'skillPowerPoint',
		'skillVisio',
		'appealPoint',
		'remarks',
		'created_at',
		'updated_at',
	);

	// entrycategory テーブルとのリレーショナル
	protected static $_has_one = array('entrycategory_id' => array(
    	'model_to' => 'Model_Entrycategory',
    	'key_from' => 'entrycategory',
    	'key_to' => 'id',
    	'cascade_save' => true,
    	'cascade_delete' => false,
	));

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('entrycategory', 'Entrycategory', 'required|max_length[1]');
		$val->add_field('entrydate', 'Entrydate', 'required');
		$val->add_field('occupation', 'Occupation', 'required');
		$val->add_field('applicant', 'Applicant', 'required|max_length[50]');
		$val->add_field('sex', 'Sex', 'required|max_length[1]');
		$val->add_field('age', 'Age', 'required|valid_string[numeric]');

		return $val;
	}

}
