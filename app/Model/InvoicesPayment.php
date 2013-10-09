<?php
App::uses('AppModel', 'Model');
/**
 * InvoicesPayment Model
 *
 * @property Invoice $Invoice
 * @property Payment $Payment
 */
class InvoicesPayment extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'invoice_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'payment_id' => array(
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
		'Invoice' => array(
			'className' => 'Invoice',
			'foreignKey' => 'invoice_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Payment' => array(
			'className' => 'Payment',
			'foreignKey' => 'payment_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
