<?php
/* EntriesTags Test cases generated on: 2010-12-08 19:12:35 : 1291804895*/
App::import('Controller', 'EntriesTags');

class TestEntriesTagsController extends EntriesTagsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EntriesTagsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.entries_tag', 'app.entry', 'app.user', 'app.tag');

	function startTest() {
		$this->EntriesTags =& new TestEntriesTagsController();
		$this->EntriesTags->constructClasses();
	}

	function endTest() {
		unset($this->EntriesTags);
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