<?php
class EntriesController extends AppController {

	var $name = 'Entries';

	function index() {
		$this->Entry->recursive = 0;
		$this->set('entries', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid entry', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('entry', $this->Entry->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Entry->create();
			if ($this->Entry->save($this->data)) {
				$this->Session->setFlash(__('The entry has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entry could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Entry->User->find('list');
		$tags = $this->Entry->Tag->find('list');
		$this->set(compact('users', 'tags'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid entry', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Entry->save($this->data)) {
				$this->Session->setFlash(__('The entry has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entry could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Entry->read(null, $id);
		}
		$users = $this->Entry->User->find('list');
		$tags = $this->Entry->Tag->find('list');
		$this->set(compact('users', 'tags'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for entry', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Entry->delete($id)) {
			$this->Session->setFlash(__('Entry deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Entry was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>