<?php
App::uses('InvoicesPayment', 'Model');

/**
 * InvoicesPayment Test Case
 *
 */
class InvoicesPaymentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.invoices_payment',
		'app.invoice',
		'app.customer',
		'app.staff',
		'app.item',
		'app.transaction',
		'app.payment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->InvoicesPayment = ClassRegistry::init('InvoicesPayment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InvoicesPayment);

		parent::tearDown();
	}

}
