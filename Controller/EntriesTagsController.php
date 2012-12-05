<?php
App::uses('AppController', 'Controller');
/**
 * EntriesTags Controller
 *
 * @property EntriesTag $EntriesTag
 */
class EntriesTagsController extends AppController {

/**
 *  Layout
 *
 * @var string
 */
	public $layout = 'bootstrap';

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('TwitterBootstrap.BootstrapHtml', 'TwitterBootstrap.BootstrapForm', 'TwitterBootstrap.BootstrapPaginator');
/**
 * Components
 *
 * @var array
 */
	public $components = array('Session');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EntriesTag->recursive = 0;
		$this->set('entriesTags', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EntriesTag->id = $id;
		if (!$this->EntriesTag->exists()) {
			throw new NotFoundException(__('Invalid %s', __('entries tag')));
		}
		$this->set('entriesTag', $this->EntriesTag->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EntriesTag->create();
			if ($this->EntriesTag->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('entries tag')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('entries tag')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		}
		$entries = $this->EntriesTag->Entry->find('list');
		$tags = $this->EntriesTag->Tag->find('list');
		$this->set(compact('entries', 'tags'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->EntriesTag->id = $id;
		if (!$this->EntriesTag->exists()) {
			throw new NotFoundException(__('Invalid %s', __('entries tag')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EntriesTag->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('entries tag')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('entries tag')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->EntriesTag->read(null, $id);
		}
		$entries = $this->EntriesTag->Entry->find('list');
		$tags = $this->EntriesTag->Tag->find('list');
		$this->set(compact('entries', 'tags'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->EntriesTag->id = $id;
		if (!$this->EntriesTag->exists()) {
			throw new NotFoundException(__('Invalid %s', __('entries tag')));
		}
		if ($this->EntriesTag->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('entries tag')),
				'alert',
				array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('entries tag')),
			'alert',
			array(
				'plugin' => 'TwitterBootstrap',
				'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}
}
