<?php
App::uses('AppModel', 'Model');
/**
 * AnexosJustificativa Model
 *
 * @property Justificativa $Justificativa
 */
class AnexosJustificativa extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nome_arquivo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Justificativa' => array(
			'className' => 'Justificativa',
			'foreignKey' => 'justificativa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
