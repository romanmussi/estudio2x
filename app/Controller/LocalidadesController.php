<?php

App::uses('AppController', 'Controller');

/**
 * Localidades Controller
 *
 * @property Localidad $Localidad
 */
class LocalidadesController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->paginate = array('limit' => 10);
        $this->Localidad->recursive = 0;
        $this->set('localidades', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Localidad->id = $id;
        if (!$this->Localidad->exists()) {
            throw new NotFoundException(__('Invalid localidad'));
        }
        $this->set('localidad', $this->Localidad->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {

//        debug($this->request->data);

        if ($this->request->is('post')) {
            $this->Localidad->create();
            if ($this->Localidad->save($this->request->data)) {
                $this->Session->setFlash(__('The localidad has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The localidad could not be saved. Please, try again.'));
            }
        }

        //obtener jurisdicciones
        //$jurisdicciones = $this->Localidad->Departamento->Jurisdiccion->find('list');
        //asigna jurisdiccion id para busqueda de departamentos relacionados
        if (!empty($this->request->data)) {
            $jurisdiccion_id = $this->request->data['Localidad']['jurisdiccion_id'];
        } else {
            $jurisdiccion_id = '';
        }

        //obtener departamentos de una jurisdiccion
//        $departamentos = $this->Localidad->Departamento->find('list', array('conditions' =>
//            array('Departamento.jurisdiccion_id' => $jurisdiccion_id)));
//        $this->set(compact('jurisdicciones', 'departamentos'));
    }

    public function lista_jurisdicciones() {
        //obtener jurisdicciones
        $jurisdicciones = $this->Localidad->Departamento->Jurisdiccion->find('list');
        $this->set('jurisdicciones', $jurisdicciones);
    }

    public function lista_departamentos($jurisdiccion_id = null) {
        $this->log($this->request, 'debug');
        $this->log($this->request->pass, 'debug');
        $this->log($this->request->named, 'debug');
        $this->log($this->request->query, 'debug');
//        $this->log($this->request->query['jurisdiccion_id'], 'debug');
        //obtener departamentos de una jurisdiccion
        $departamentos = $this->Localidad->Departamento->find('list', array('conditions' => array('Departamento.jurisdiccion_id' => $jurisdiccion_id)));
        $this->set('departamentos', $departamentos);
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Localidad->id = $id;
        if (!$this->Localidad->exists()) {
            throw new NotFoundException(__('Invalid localidad'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Localidad->save($this->request->data)) {
                $this->Session->setFlash(__('The localidad has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The localidad could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Localidad->read(null, $id);
        }
        $departamentos = $this->Localidad->Departamento->find('list');
        $this->set(compact('departamentos'));
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
        $this->Localidad->id = $id;
        if (!$this->Localidad->exists()) {
            throw new NotFoundException(__('Invalid localidad'));
        }
        if ($this->Localidad->delete()) {
            $this->Session->setFlash(__('Localidad deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Localidad was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}