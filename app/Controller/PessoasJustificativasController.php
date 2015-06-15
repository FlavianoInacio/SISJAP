	<?php
App::uses('AppController', 'Controller');
/**
 * PessoasJustificativas Controller
 *
 * @property PessoasJustificativa $PessoasJustificativa
 * @property PaginatorComponent $Paginator
 */
class PessoasJustificativasController extends AppController {

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
		$this->PessoasJustificativa->recursive = 0;
		$this->set('pessoasJustificativas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PessoasJustificativa->exists($id)) {
			throw new NotFoundException(__('Invalid pessoas justificativa'));
		}
		$options = array('conditions' => array('PessoasJustificativa.' . $this->PessoasJustificativa->primaryKey => $id));
		$this->set('pessoasJustificativa', $this->PessoasJustificativa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PessoasJustificativa->create();
			if ($this->PessoasJustificativa->save($this->request->data)) {
				$this->Session->setFlash(__('Colaborador cadastrado com sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pessoas justificativa could not be saved. Please, try again.'));
			}
		}
		$setores = $this->PessoasJustificativa->Setore->find('list',array('fields'=>('nome_setor')));
		$this->set(compact('setores'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PessoasJustificativa->exists($id)) {
			throw new NotFoundException(__('Invalid pessoas justificativa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PessoasJustificativa->save($this->request->data)) {
				$this->Session->setFlash(__('Colaborador Editado com sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pessoas justificativa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PessoasJustificativa.' . $this->PessoasJustificativa->primaryKey => $id));
			$this->request->data = $this->PessoasJustificativa->find('first', $options);
		}
		$setores = $this->PessoasJustificativa->Setore->find('list');
		$this->set(compact('setores'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PessoasJustificativa->id = $id;
		if (!$this->PessoasJustificativa->exists()) {
			throw new NotFoundException(__('Invalid pessoas justificativa'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PessoasJustificativa->delete()) {
			$this->Session->setFlash(__('Colaborador Deletado com Sucesso!'));
		} else {
			$this->Session->setFlash(__('The pessoas justificativa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
