<?php
App::uses('PessoaJustificativa', 'Model');

/**
 * PessoaJustificativa Test Case
 *
 */
class PessoaJustificativaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pessoa_justificativa',
		'app.setore'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PessoaJustificativa = ClassRegistry::init('PessoaJustificativa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PessoaJustificativa);

		parent::tearDown();
	}

}
