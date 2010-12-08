<?php
/* Profile Test cases generated on: 2010-12-08 19:12:53 : 1291804913*/
App::import('Model', 'Profile');

class ProfileTestCase extends CakeTestCase {
	var $fixtures = array('app.profile', 'app.user');

	function startTest() {
		$this->Profile =& ClassRegistry::init('Profile');
	}

	function endTest() {
		unset($this->Profile);
		ClassRegistry::flush();
	}

}
?>