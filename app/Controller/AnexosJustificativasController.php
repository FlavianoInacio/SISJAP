<?php
App::uses('AppController', 'Controller');
/**
 * AnexosJustificativas Controller
 *
 * @property AnexosJustificativa $AnexosJustificativa
 * @property PaginatorComponent $Paginator
 */
class AnexosJustificativasController extends AppController {

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
		$this->AnexosJustificativa->recursive = 0;
		$this->set('anexosJustificativas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AnexosJustificativa->exists($id)) {
			throw new NotFoundException(__('Invalid anexos justificativa'));
		}
		$options = array('conditions' => array('AnexosJustificativa.' . $this->AnexosJustificativa->primaryKey => $id));
		$this->set('anexosJustificativa', $this->AnexosJustificativa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AnexosJustificativa->create();
			if ($this->AnexosJustificativa->save($this->request->data)) {
				$this->Session->setFlash(__('The anexos justificativa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The anexos justificativa could not be saved. Please, try again.'));
			}
		}
		$justificativas = $this->AnexosJustificativa->Justificativa->find('list');
		$this->set(compact('justificativas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AnexosJustificativa->exists($id)) {
			throw new NotFoundException(__('Invalid anexos justificativa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AnexosJustificativa->save($this->request->data)) {
				$this->Session->setFlash(__('The anexos justificativa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The anexos justificativa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AnexosJustificativa.' . $this->AnexosJustificativa->primaryKey => $id));
			$this->request->data = $this->AnexosJustificativa->find('first', $options);
		}
		$justificativas = $this->AnexosJustificativa->Justificativa->find('list');
		$this->set(compact('justificativas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AnexosJustificativa->id = $id;
		if (!$this->AnexosJustificativa->exists()) {
			throw new NotFoundException(__('Invalid anexos justificativa'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AnexosJustificativa->delete()) {
			$this->Session->setFlash(__('The anexos justificativa has been deleted.'));
		} else {
			$this->Session->setFlash(__('The anexos justificativa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
