<?php

App::uses('AppModel', 'Model');

/**
 * Localidad Model
 *
 * @property Departamento $Departamento
 * @property Instit $Instit
 */
class Localidad extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'name';
    
    public $validate = array(
        //departamento_id debe ser id valido en departamentos
        'departamento_id' => array(
            'rule'    => array('verifica_departamento_id'),
            'message' => 'El departamento no existe.'
        ),
        //Nombre no puede estar vacio
        'name' => array(
            'rule' => 'notEmpty',
            'message' => 'El campo no puede quedar vacío.'
        ),
    );

    public function verifica_departamento_id($check) {
        $casos = $this->Departamento->find('count', array('conditions' => array('Departamento.id' => $check)));
        return $casos > 0;
    }

//The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Departamento' => array(
            'className' => 'Departamento',
            'foreignKey' => 'departamento_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'Instit' => array(
            'className' => 'Instit',
            'foreignKey' => 'localidad_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );

}

