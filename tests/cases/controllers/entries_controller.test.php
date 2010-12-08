<?php
/* Entries Test cases generated on: 2010-12-08 19:12:08 : 1291804868*/
App::import('Controller', 'Entries');

class TestEntriesController extends EntriesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EntriesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.entry', 'app.user', 'app.tag', 'app.entries_tag');

	function startTest() {
		$this->Entries =& new TestEntriesController();
		$this->Entries->constructClasses();
	}

	function endTest() {
		unset($this->Entries);
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