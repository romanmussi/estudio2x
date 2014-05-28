<?php

App::uses('AppController', 'Controller');

/**
 * Groups Controller
 */
class GroupsController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Group->recursive = 0;
        $this->set('groups', $this->paginate());
    }
}
