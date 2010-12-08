<?php
/* EntriesTag Test cases generated on: 2010-12-08 19:12:35 : 1291804895*/
App::import('Model', 'EntriesTag');

class EntriesTagTestCase extends CakeTestCase {
	var $fixtures = array('app.entries_tag', 'app.entry', 'app.user', 'app.tag');

	function startTest() {
		$this->EntriesTag =& ClassRegistry::init('EntriesTag');
	}

	function endTest() {
		unset($this->EntriesTag);
		ClassRegistry::flush();
	}

}
?>