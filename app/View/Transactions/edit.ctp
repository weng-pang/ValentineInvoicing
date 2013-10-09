<div class="transactions form">
<?php echo $this->Form->create('Transaction'); ?>
	<fieldset>
		<legend><?php echo __('Edit Transaction'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('staff_id');
		echo $this->Form->input('invoice_id');
		echo $this->Form->input('content');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Transaction.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Transaction.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Staffs'), array('controller' => 'staffs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Staff'), array('controller' => 'staffs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
