<?php
/* Entry Test cases generated on: 2010-12-08 19:12:07 : 1291804867*/
App::import('Model', 'Entry');

class EntryTestCase extends CakeTestCase {
	var $fixtures = array('app.entry', 'app.user', 'app.tag', 'app.entries_tag');

	function startTest() {
		$this->Entry =& ClassRegistry::init('Entry');
	}

	function endTest() {
		unset($this->Entry);
		ClassRegistry::flush();
	}

}
?>