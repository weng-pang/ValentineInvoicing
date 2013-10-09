<?php
App::uses('Cusomter', 'Model');

/**
 * Cusomter Test Case
 *
 */
class CusomterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cusomter'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cusomter = ClassRegistry::init('Cusomter');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cusomter);

		parent::tearDown();
	}

}
