<?php
App::uses('AnexosJustificativa', 'Model');

/**
 * AnexosJustificativa Test Case
 *
 */
class AnexosJustificativaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.anexos_justificativa',
		'app.justificativa'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AnexosJustificativa = ClassRegistry::init('AnexosJustificativa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AnexosJustificativa);

		parent::tearDown();
	}

}
