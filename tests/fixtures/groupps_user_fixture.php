<?php
/* GrouppsUser Fixture generated on: 2010-12-08 19:12:45 : 1291804905 */
class GrouppsUserFixture extends CakeTestFixture {
	var $name = 'GrouppsUser';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false),
		'groupp_id' => array('type' => 'integer', 'null' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'groupp_id' => 1,
			'created' => '2010-12-08 19:41:45',
			'modified' => '2010-12-08 19:41:45'
		),
	);
}
?>