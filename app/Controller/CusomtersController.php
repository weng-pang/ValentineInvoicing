<?php
App::uses('AppController', 'Controller');
/**
 * Cusomters Controller
 *
 * @property Cusomter $Cusomter
 * @property PaginatorComponent $Paginator
 */
class CusomtersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Cusomter->recursive = 0;
		$this->set('cusomters', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cusomter->exists($id)) {
			throw new NotFoundException(__('Invalid cusomter'));
		}
		$options = array('conditions' => array('Cusomter.' . $this->Cusomter->primaryKey => $id));
		$this->set('cusomter', $this->Cusomter->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cusomter->create();
			if ($this->Cusomter->save($this->request->data)) {
				$this->Session->setFlash(__('The cusomter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cusomter could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Cusomter->exists($id)) {
			throw new NotFoundException(__('Invalid cusomter'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cusomter->save($this->request->data)) {
				$this->Session->setFlash(__('The cusomter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cusomter could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cusomter.' . $this->Cusomter->primaryKey => $id));
			$this->request->data = $this->Cusomter->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Cusomter->id = $id;
		if (!$this->Cusomter->exists()) {
			throw new NotFoundException(__('Invalid cusomter'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Cusomter->delete()) {
			$this->Session->setFlash(__('The cusomter has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cusomter could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
