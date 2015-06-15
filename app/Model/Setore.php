<?php
App::uses('AppModel', 'Model');
/**
 * Setore Model
 *
 * @property PessoasJustificativa $PessoasJustificativa
 */
class Setore extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nome_setor' => array(
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

	/*public $hasOne = array(
		'PessoasJustificativa' => array(
			'className' => 'PessoasJustificativa',
			'dependent' => true,
			'fields'=>array('PessoasJustificativa.id','PessoasJustificativa.nome'),
			'foreignKey'=>"setore_od"
			);

		);/*

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'PessoasJustificativa' => array(
			'className' => 'PessoasJustificativa',
			'foreignKey' => 'setore_id',
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
