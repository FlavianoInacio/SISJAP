<?php
/**
 * JustificativaFixture
 *
 */
class JustificativaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'pessoas_justificativa_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'pessoas_gestor_justificativa' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'pessoas_rh_justificativa' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'data_inicial' => array('type' => 'date', 'null' => false, 'default' => null),
		'data_final' => array('type' => 'date', 'null' => false, 'default' => null),
		'qtd_horas' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'complemento_justificativa' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 500, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'motivo_ocorrencia' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'justificativa' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'situacao_gestor' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'situacao_rh' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'pessoas_justificativa_id_' => array('column' => 'pessoas_justificativa_id', 'unique' => 0),
			'pessoas_gestor_justificativa_id_' => array('column' => 'pessoas_gestor_justificativa', 'unique' => 0),
			'pessoas_rh_justificativa_id' => array('column' => 'pessoas_rh_justificativa', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'pessoas_justificativa_id' => 1,
			'pessoas_gestor_justificativa' => 1,
			'pessoas_rh_justificativa' => 1,
			'data_inicial' => '2015-06-11',
			'data_final' => '2015-06-11',
			'qtd_horas' => 1,
			'complemento_justificativa' => 'Lorem ipsum dolor sit amet',
			'motivo_ocorrencia' => 'Lorem ipsum dolor sit amet',
			'justificativa' => 'Lorem ipsum dolor sit amet',
			'situacao_gestor' => 1,
			'situacao_rh' => 1,
			'created' => '2015-06-11 18:53:56',
			'modified' => '2015-06-11 18:53:56'
		),
	);

}
