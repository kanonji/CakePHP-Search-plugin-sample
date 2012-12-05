<?php
App::uses('EntriesTag', 'Model');

/**
 * EntriesTag Test Case
 *
 */
class EntriesTagTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.entries_tag',
		'app.entry',
		'app.user',
		'app.tag'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EntriesTag = ClassRegistry::init('EntriesTag');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EntriesTag);

		parent::tearDown();
	}

}
