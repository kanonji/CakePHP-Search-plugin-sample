<?php
App::uses('AppController', 'Controller');
/**
 * Entries Controller
 *
 * @property Entry $Entry
 */
class EntriesController extends AppController {

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
		$this->Entry->recursive = 0;
		$this->set('entries', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Entry->id = $id;
		if (!$this->Entry->exists()) {
			throw new NotFoundException(__('Invalid %s', __('entry')));
		}
		$this->set('entry', $this->Entry->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Entry->create();
			if ($this->Entry->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('entry')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('entry')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		}
		$users = $this->Entry->User->find('list');
		$tags = $this->Entry->Tag->find('list');
		$this->set(compact('users', 'tags'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Entry->id = $id;
		if (!$this->Entry->exists()) {
			throw new NotFoundException(__('Invalid %s', __('entry')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Entry->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('entry')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('entry')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->Entry->read(null, $id);
		}
		$users = $this->Entry->User->find('list');
		$tags = $this->Entry->Tag->find('list');
		$this->set(compact('users', 'tags'));
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
		$this->Entry->id = $id;
		if (!$this->Entry->exists()) {
			throw new NotFoundException(__('Invalid %s', __('entry')));
		}
		if ($this->Entry->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('entry')),
				'alert',
				array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('entry')),
			'alert',
			array(
				'plugin' => 'TwitterBootstrap',
				'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}
}
