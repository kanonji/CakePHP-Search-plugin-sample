<?php
/* Tags Test cases generated on: 2010-12-08 19:12:55 : 1291804915*/
App::import('Controller', 'Tags');

class TestTagsController extends TagsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TagsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.tag', 'app.entry', 'app.user', 'app.entries_tag');

	function startTest() {
		$this->Tags =& new TestTagsController();
		$this->Tags->constructClasses();
	}

	function endTest() {
		unset($this->Tags);
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