<?php
/* Groupp Fixture generated on: 2010-12-08 19:12:43 : 1291804903 */
class GrouppFixture extends CakeTestFixture {
	var $name = 'Groupp';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'label' => array('type' => 'string', 'null' => false, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'label_UNIQUE' => array('column' => 'label', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'label' => 'Lorem ipsum dolor sit amet',
			'created' => '2010-12-08 19:41:43',
			'modified' => '2010-12-08 19:41:43'
		),
	);
}
?>