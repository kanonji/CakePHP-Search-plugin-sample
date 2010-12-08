<?php
/* Profiles Test cases generated on: 2010-12-08 19:12:53 : 1291804913*/
App::import('Controller', 'Profiles');

class TestProfilesController extends ProfilesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProfilesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.profile', 'app.user');

	function startTest() {
		$this->Profiles =& new TestProfilesController();
		$this->Profiles->constructClasses();
	}

	function endTest() {
		unset($this->Profiles);
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