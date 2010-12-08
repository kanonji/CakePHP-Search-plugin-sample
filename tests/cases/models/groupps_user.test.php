<?php
/* GrouppsUser Test cases generated on: 2010-12-08 19:12:45 : 1291804905*/
App::import('Model', 'GrouppsUser');

class GrouppsUserTestCase extends CakeTestCase {
	var $fixtures = array('app.groupps_user', 'app.user', 'app.groupp');

	function startTest() {
		$this->GrouppsUser =& ClassRegistry::init('GrouppsUser');
	}

	function endTest() {
		unset($this->GrouppsUser);
		ClassRegistry::flush();
	}

}
?>