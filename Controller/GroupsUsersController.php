<?php
App::uses('AppController', 'Controller');
/**
 * GroupsUsers Controller
 *
 * @property GroupsUser $GroupsUser
 */
class GroupsUsersController extends AppController {

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
		$this->GroupsUser->recursive = 0;
		$this->set('groupsUsers', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->GroupsUser->id = $id;
		if (!$this->GroupsUser->exists()) {
			throw new NotFoundException(__('Invalid %s', __('groups user')));
		}
		$this->set('groupsUser', $this->GroupsUser->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GroupsUser->create();
			if ($this->GroupsUser->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('groups user')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('groups user')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		}
		$users = $this->GroupsUser->User->find('list');
		$groups = $this->GroupsUser->Group->find('list');
		$this->set(compact('users', 'groups'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->GroupsUser->id = $id;
		if (!$this->GroupsUser->exists()) {
			throw new NotFoundException(__('Invalid %s', __('groups user')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->GroupsUser->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('groups user')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('groups user')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->GroupsUser->read(null, $id);
		}
		$users = $this->GroupsUser->User->find('list');
		$groups = $this->GroupsUser->Group->find('list');
		$this->set(compact('users', 'groups'));
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
		$this->GroupsUser->id = $id;
		if (!$this->GroupsUser->exists()) {
			throw new NotFoundException(__('Invalid %s', __('groups user')));
		}
		if ($this->GroupsUser->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('groups user')),
				'alert',
				array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('groups user')),
			'alert',
			array(
				'plugin' => 'TwitterBootstrap',
				'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}
}
