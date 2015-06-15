<?php
App::uses('Justificativa', 'Model');

/**
 * Justificativa Test Case
 *
 */
class JustificativaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.justificativa',
		'app.pessoas_justificativa'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Justificativa = ClassRegistry::init('Justificativa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Justificativa);

		parent::tearDown();
	}

}
