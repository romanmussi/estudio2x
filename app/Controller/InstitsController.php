<?php
App::uses('AppController', 'Controller');
/**
 * Instits Controller
 *
 * @property Instit $Instit
 */
class InstitsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Instit->recursive = 0;
		$this->set('instits', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Instit->id = $id;
		if (!$this->Instit->exists()) {
			throw new NotFoundException(__('Invalid instit'));
		}
		$this->set('instit', $this->Instit->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Instit->create();
			if ($this->Instit->save($this->request->data)) {
				$this->Session->setFlash(__('The instit has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instit could not be saved. Please, try again.'));
			}
		}
		$tipoinstits = $this->Instit->Tipoinstit->find('list');
		$jurisdicciones = $this->Instit->Jurisdiccion->find('list');
		$localidades = $this->Instit->Localidad->find('list');
		$departamentos = $this->Instit->Departamento->find('list');
		$this->set(compact('tipoinstits', 'jurisdicciones', 'localidades', 'departamentos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Instit->id = $id;
		if (!$this->Instit->exists()) {
			throw new NotFoundException(__('Invalid instit'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Instit->save($this->request->data)) {
				$this->Session->setFlash(__('The instit has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instit could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Instit->read(null, $id);
		}
		$tipoinstits = $this->Instit->Tipoinstit->find('list');
		$jurisdicciones = $this->Instit->Jurisdiccion->find('list');
		$localidades = $this->Instit->Localidad->find('list');
		$departamentos = $this->Instit->Departamento->find('list');
		$this->set(compact('tipoinstits', 'jurisdicciones', 'localidades', 'departamentos'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Instit->id = $id;
		if (!$this->Instit->exists()) {
			throw new NotFoundException(__('Invalid instit'));
		}
		if ($this->Instit->delete()) {
			$this->Session->setFlash(__('Instit deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Instit was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
