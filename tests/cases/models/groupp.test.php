<?php
/* Groupp Test cases generated on: 2010-12-08 19:12:43 : 1291804903*/
App::import('Model', 'Groupp');

class GrouppTestCase extends CakeTestCase {
	var $fixtures = array('app.groupp', 'app.user', 'app.groupps_user');

	function startTest() {
		$this->Groupp =& ClassRegistry::init('Groupp');
	}

	function endTest() {
		unset($this->Groupp);
		ClassRegistry::flush();
	}

}
?>