<?php
App::uses('AppController', 'Controller');
/**
 * Justificativas Controller
 *
 * @property Justificativa $Justificativa
 * @property PaginatorComponent $Paginator
 */
class JustificativasController extends AppController {

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
		$this->Justificativa->recursive = 0;
		$this->set('justificativas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Justificativa->exists($id)) {
			throw new NotFoundException(__('Invalid justificativa'));
		}
		$options = array('conditions' => array('Justificativa.' . $this->Justificativa->primaryKey => $id));
		$this->set('justificativa', $this->Justificativa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Justificativa->create();
			if ($this->Justificativa->save($this->request->data)) {
				$this->Session->setFlash(__('The justificativa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The justificativa could not be saved. Please, try again.'));
			}
		}
		$pessoasJustificativas = $this->Justificativa->PessoasJustificativa->find('list');
		$this->set(compact('pessoasJustificativas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Justificativa->exists($id)) {
			throw new NotFoundException(__('Invalid justificativa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Justificativa->save($this->request->data)) {
				$this->Session->setFlash(__('The justificativa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The justificativa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Justificativa.' . $this->Justificativa->primaryKey => $id));
			$this->request->data = $this->Justificativa->find('first', $options);
		}
		$pessoasJustificativas = $this->Justificativa->PessoasJustificativa->find('list');
		$this->set(compact('pessoasJustificativas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Justificativa->id = $id;
		if (!$this->Justificativa->exists()) {
			throw new NotFoundException(__('Invalid justificativa'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Justificativa->delete()) {
			$this->Session->setFlash(__('The justificativa has been deleted.'));
		} else {
			$this->Session->setFlash(__('The justificativa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
