<?php
/* Tag Test cases generated on: 2010-12-08 19:12:55 : 1291804915*/
App::import('Model', 'Tag');

class TagTestCase extends CakeTestCase {
	var $fixtures = array('app.tag', 'app.entry', 'app.user', 'app.entries_tag');

	function startTest() {
		$this->Tag =& ClassRegistry::init('Tag');
	}

	function endTest() {
		unset($this->Tag);
		ClassRegistry::flush();
	}

}
?>