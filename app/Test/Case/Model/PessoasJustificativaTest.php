<?php
App::uses('PessoasJustificativa', 'Model');

/**
 * PessoasJustificativa Test Case
 *
 */
class PessoasJustificativaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pessoas_justificativa',
		'app.setore',
		'app.justificativa'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PessoasJustificativa = ClassRegistry::init('PessoasJustificativa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PessoasJustificativa);

		parent::tearDown();
	}

}
