<?php
class GrouppsController extends AppController {

	var $name = 'Groupps';

	function index() {
		$this->Groupp->recursive = 0;
		$this->set('groupps', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid groupp', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('groupp', $this->Groupp->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Groupp->create();
			if ($this->Groupp->save($this->data)) {
				$this->Session->setFlash(__('The groupp has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The groupp could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Groupp->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid groupp', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Groupp->save($this->data)) {
				$this->Session->setFlash(__('The groupp has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The groupp could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Groupp->read(null, $id);
		}
		$users = $this->Groupp->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for groupp', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Groupp->delete($id)) {
			$this->Session->setFlash(__('Groupp deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Groupp was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>