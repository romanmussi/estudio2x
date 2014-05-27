<?php
App::uses('AppController', 'Controller');
/**
 * Tipoinstits Controller
 *
 * @property Tipoinstit $Tipoinstit
 */
class TipoinstitsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
	$this->paginate = array(
            'limit' => 20,
            'order' => array('Tipoinstit.name' => 'asc')
        );	
            
            $this->Tipoinstit->recursive = 0;
		$this->set('tipoinstits', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function _view($id = null) {
		$this->Tipoinstit->id = $id;
		if (!$this->Tipoinstit->exists()) {
			throw new NotFoundException(__('Invalid tipoinstit'));
		}
		$this->set('tipoinstit', $this->Tipoinstit->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function _add() {
		if ($this->request->is('post')) {
			$this->Tipoinstit->create();
			if ($this->Tipoinstit->save($this->request->data)) {
				$this->Session->setFlash(__('The tipoinstit has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipoinstit could not be saved. Please, try again.'));
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
	public function _edit($id = null) {
		$this->Tipoinstit->id = $id;
		if (!$this->Tipoinstit->exists()) {
			throw new NotFoundException(__('Invalid tipoinstit'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tipoinstit->save($this->request->data)) {
				$this->Session->setFlash(__('The tipoinstit has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipoinstit could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Tipoinstit->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function _delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Tipoinstit->id = $id;
		if (!$this->Tipoinstit->exists()) {
			throw new NotFoundException(__('Invalid tipoinstit'));
		}
		if ($this->Tipoinstit->delete()) {
			$this->Session->setFlash(__('Tipoinstit deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tipoinstit was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
