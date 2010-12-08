<?php
/* EntriesTag Fixture generated on: 2010-12-08 19:12:35 : 1291804895 */
class EntriesTagFixture extends CakeTestFixture {
	var $name = 'EntriesTag';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'entry_id' => array('type' => 'integer', 'null' => false),
		'tag_id' => array('type' => 'integer', 'null' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'entry_id' => 1,
			'tag_id' => 1,
			'created' => '2010-12-08 19:41:35',
			'modified' => '2010-12-08 19:41:35'
		),
	);
}
?>