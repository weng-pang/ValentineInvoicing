<?php
App::uses('AppController', 'Controller');
/**
 * InvoicesPayments Controller
 *
 * @property InvoicesPayment $InvoicesPayment
 * @property PaginatorComponent $Paginator
 */
class InvoicesPaymentsController extends AppController {

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
		$this->InvoicesPayment->recursive = 0;
		$this->set('invoicesPayments', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->InvoicesPayment->exists($id)) {
			throw new NotFoundException(__('Invalid invoices payment'));
		}
		$options = array('conditions' => array('InvoicesPayment.' . $this->InvoicesPayment->primaryKey => $id));
		$this->set('invoicesPayment', $this->InvoicesPayment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->InvoicesPayment->create();
			if ($this->InvoicesPayment->save($this->request->data)) {
				$this->Session->setFlash(__('The invoices payment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The invoices payment could not be saved. Please, try again.'));
			}
		}
		$invoices = $this->InvoicesPayment->Invoice->find('list');
		$payments = $this->InvoicesPayment->Payment->find('list');
		$this->set(compact('invoices', 'payments'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->InvoicesPayment->exists($id)) {
			throw new NotFoundException(__('Invalid invoices payment'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->InvoicesPayment->save($this->request->data)) {
				$this->Session->setFlash(__('The invoices payment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The invoices payment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('InvoicesPayment.' . $this->InvoicesPayment->primaryKey => $id));
			$this->request->data = $this->InvoicesPayment->find('first', $options);
		}
		$invoices = $this->InvoicesPayment->Invoice->find('list');
		$payments = $this->InvoicesPayment->Payment->find('list');
		$this->set(compact('invoices', 'payments'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->InvoicesPayment->id = $id;
		if (!$this->InvoicesPayment->exists()) {
			throw new NotFoundException(__('Invalid invoices payment'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->InvoicesPayment->delete()) {
			$this->Session->setFlash(__('The invoices payment has been deleted.'));
		} else {
			$this->Session->setFlash(__('The invoices payment could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
