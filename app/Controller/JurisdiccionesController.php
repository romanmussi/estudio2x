<?php

App::uses('AppController', 'Controller');

/**
 * Jurisdicciones Controller
 *
 * @property Jurisdiccion $Jurisdiccion
 */
class JurisdiccionesController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->paginate = array(
            'limit' => 30,
            'order' => array('Jurisdiccion.name' => 'asc')
        );
        $this->Jurisdiccion->recursive = 0;
        $this->set('jurisdicciones', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function _view($id = null) {
        $this->Jurisdiccion->id = $id;
        if (!$this->Jurisdiccion->exists()) {
            throw new NotFoundException(__('Invalid jurisdiccion'));
        }
        $this->set('jurisdiccion', $this->Jurisdiccion->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function _add() {
        if ($this->request->is('post')) {
            $this->Jurisdiccion->create();
            if ($this->Jurisdiccion->save($this->request->data)) {
                $this->Session->setFlash(__('The jurisdiccion has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The jurisdiccion could not be saved. Please, try again.'));
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
        $this->Jurisdiccion->id = $id;
        if (!$this->Jurisdiccion->exists()) {
            throw new NotFoundException(__('Invalid jurisdiccion'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Jurisdiccion->save($this->request->data)) {
                $this->Session->setFlash(__('The jurisdiccion has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The jurisdiccion could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Jurisdiccion->read(null, $id);
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
        $this->Jurisdiccion->id = $id;
        if (!$this->Jurisdiccion->exists()) {
            throw new NotFoundException(__('Invalid jurisdiccion'));
        }
        if ($this->Jurisdiccion->delete()) {
            $this->Session->setFlash(__('Jurisdiccion deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Jurisdiccion was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
