<?php
App::uses('GroupsUser', 'Model');

/**
 * GroupsUser Test Case
 *
 */
class GroupsUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.groups_user',
		'app.user',
		'app.group'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GroupsUser = ClassRegistry::init('GroupsUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GroupsUser);

		parent::tearDown();
	}

}
