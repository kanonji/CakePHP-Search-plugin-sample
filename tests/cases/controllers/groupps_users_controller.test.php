<?php
/* GrouppsUsers Test cases generated on: 2010-12-08 19:12:46 : 1291804906*/
App::import('Controller', 'GrouppsUsers');

class TestGrouppsUsersController extends GrouppsUsersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class GrouppsUsersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.groupps_user', 'app.user', 'app.groupp');

	function startTest() {
		$this->GrouppsUsers =& new TestGrouppsUsersController();
		$this->GrouppsUsers->constructClasses();
	}

	function endTest() {
		unset($this->GrouppsUsers);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>