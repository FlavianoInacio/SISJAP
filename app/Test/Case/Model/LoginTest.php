<?php
App::uses('Login', 'Model');

/**
 * Login Test Case
 *
 */
class LoginTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.login',
		'app.pessoa_justificativa',
		'app.setore',
		'app.pessoas_justificativa',
		'app.justificativa'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Login = ClassRegistry::init('Login');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Login);

		parent::tearDown();
	}

}
