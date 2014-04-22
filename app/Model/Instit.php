<?php
App::uses('AppModel', 'Model');
/**
 * Instit Model
 *
 * @property Tipoinstit $Tipoinstit
 * @property Localidad $Localidad
 */
class Instit extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Tipoinstit' => array(
			'className' => 'Tipoinstit',
			'foreignKey' => 'tipoinstit_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Localidad' => array(
			'className' => 'Localidad',
			'foreignKey' => 'localidad_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
