<?php
/* Groupps Test cases generated on: 2010-12-08 19:12:43 : 1291804903*/
App::import('Controller', 'Groupps');

class TestGrouppsController extends GrouppsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class GrouppsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.groupp', 'app.user', 'app.groupps_user');

	function startTest() {
		$this->Groupps =& new TestGrouppsController();
		$this->Groupps->constructClasses();
	}

	function endTest() {
		unset($this->Groupps);
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