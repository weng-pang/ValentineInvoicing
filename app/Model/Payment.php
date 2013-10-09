<?php
App::uses('AppModel', 'Model');
/**
 * Payment Model
 *
 * @property PaymentType $PaymentType
 * @property Invoice $Invoice
 */
class Payment extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'payment_type_id' => array(
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
		'PaymentType' => array(
			'className' => 'PaymentType',
			'foreignKey' => 'payment_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Invoice' => array(
			'className' => 'Invoice',
			'joinTable' => 'invoices_payments',
			'foreignKey' => 'payment_id',
			'associationForeignKey' => 'invoice_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
