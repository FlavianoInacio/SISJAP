<?php
App::uses('AppController', 'Controller');
/**
 * Logins Controller
 *
 * @property Login $Login
 * @property PaginatorComponent $Paginator
 */
class LoginsController extends AppController {

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
		$this->Login->recursive = 0;
		$this->set('logins', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Login->exists($id)) {
			throw new NotFoundException(__('Invalid login'));
		}
		$options = array('conditions' => array('Login.' . $this->Login->primaryKey => $id));
		$this->set('login', $this->Login->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Login->create();
			if ($this->Login->save($this->request->data)) {
				$this->Session->setFlash(__('Login cadastrado com sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The login could not be saved. Please, try again.'));
			}
		}
		$pessoasJustificativas = $this->Login->PessoasJustificativa->find(
			'list',array(
				'fields'=>array('nome'),
				'order'=>array('PessoasJustificativa.nome ASC')
		)	);
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
		if (!$this->Login->exists($id)) {
			throw new NotFoundException(__('Invalid login'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Login->save($this->request->data)) {
				$this->Session->setFlash(__('Login Editado com sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The login could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Login.' . $this->Login->primaryKey => $id));
			$this->request->data = $this->Login->find('first', $options);
		}
		$pessoasJustificativas = $this->Login->PessoasJustificativa->find(
			'list',array(
				'fields'=>array('nome'),
				'order'=>array('PessoasJustificativa.nome ASC')
		)	);
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
		$this->Login->id = $id;
		if (!$this->Login->exists()) {
			throw new NotFoundException(__('Invalid login'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Login->delete()) {
			$this->Session->setFlash(__('Login Deletado com Sucesso!'));
		} else {
			$this->Session->setFlash(__('The login could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
