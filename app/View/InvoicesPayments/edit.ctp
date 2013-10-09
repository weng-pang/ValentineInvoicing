<div class="invoicesPayments form">
<?php echo $this->Form->create('InvoicesPayment'); ?>
	<fieldset>
		<legend><?php echo __('Edit Invoices Payment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('invoice_id');
		echo $this->Form->input('payment_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('InvoicesPayment.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('InvoicesPayment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Invoices Payments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
	</ul>
</div>
