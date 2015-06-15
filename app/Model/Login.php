<?php
App::uses('AppModel', 'Model');
/**
 * Login Model
 *
 * @property PessoasJustificativa $PessoasJustificativa
 */
class Login extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'login' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'senha' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'pessoas_justificativa_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'PessoasJustificativa' => array(
			'className' => 'PessoasJustificativa',
			'foreignKey' => 'pessoas_justificativa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
