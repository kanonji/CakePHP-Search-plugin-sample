<?php
/* User Test cases generated on: 2010-12-08 19:12:57 : 1291804917*/
App::import('Model', 'User');

class UserTestCase extends CakeTestCase {
	var $fixtures = array('app.user', 'app.entry', 'app.tag', 'app.entries_tag', 'app.profile', 'app.groupp', 'app.groupps_user', 'app.group', 'app.groups_user');

	function startTest() {
		$this->User =& ClassRegistry::init('User');
	}

	function endTest() {
		unset($this->User);
		ClassRegistry::flush();
	}

}
?>