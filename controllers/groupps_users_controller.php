<?php
class GrouppsUsersController extends AppController {

	var $name = 'GrouppsUsers';

	function index() {
		$this->GrouppsUser->recursive = 0;
		$this->set('grouppsUsers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid groupps user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('grouppsUser', $this->GrouppsUser->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->GrouppsUser->create();
			if ($this->GrouppsUser->save($this->data)) {
				$this->Session->setFlash(__('The groupps user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The groupps user could not be saved. Please, try again.', true));
			}
		}
		$users = $this->GrouppsUser->User->find('list');
		$groupps = $this->GrouppsUser->Groupp->find('list');
		$this->set(compact('users', 'groupps'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid groupps user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->GrouppsUser->save($this->data)) {
				$this->Session->setFlash(__('The groupps user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The groupps user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->GrouppsUser->read(null, $id);
		}
		$users = $this->GrouppsUser->User->find('list');
		$groupps = $this->GrouppsUser->Groupp->find('list');
		$this->set(compact('users', 'groupps'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for groupps user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->GrouppsUser->delete($id)) {
			$this->Session->setFlash(__('Groupps user deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Groupps user was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>