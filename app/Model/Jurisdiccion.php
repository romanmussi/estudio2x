<?php
App::uses('AppModel', 'Model');
/**
 * Jurisdiccion Model
 *
 * @property Instit $Instit
 * @property Tipoinstit $Tipoinstit
 */
class Jurisdiccion extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Departamento' => array(
			'className' => 'Departamento',
			'foreignKey' => 'jurisdiccion_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
                'Tipoinstit' => array(
			'className' => 'Tipoinstit',
			'foreignKey' => 'jurisdiccion_id',
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
