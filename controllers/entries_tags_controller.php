<?php
class EntriesTagsController extends AppController {

	var $name = 'EntriesTags';

	function index() {
		$this->EntriesTag->recursive = 0;
		$this->set('entriesTags', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid entries tag', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('entriesTag', $this->EntriesTag->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->EntriesTag->create();
			if ($this->EntriesTag->save($this->data)) {
				$this->Session->setFlash(__('The entries tag has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entries tag could not be saved. Please, try again.', true));
			}
		}
		$entries = $this->EntriesTag->Entry->find('list');
		$tags = $this->EntriesTag->Tag->find('list');
		$this->set(compact('entries', 'tags'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid entries tag', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->EntriesTag->save($this->data)) {
				$this->Session->setFlash(__('The entries tag has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entries tag could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EntriesTag->read(null, $id);
		}
		$entries = $this->EntriesTag->Entry->find('list');
		$tags = $this->EntriesTag->Tag->find('list');
		$this->set(compact('entries', 'tags'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for entries tag', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EntriesTag->delete($id)) {
			$this->Session->setFlash(__('Entries tag deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Entries tag was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>