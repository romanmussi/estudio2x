<?php
App::uses('AppModel', 'Model');
/**
 * Tipoinstit Model
 *
 * @property Instit $Instit
 */
class Tipoinstit extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Jurisdiccion' => array(
			'className' => 'Jurisdiccion',
			'foreignKey' => 'jurisdiccion_id',
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
			'foreignKey' => 'tipoinstit_id',
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
