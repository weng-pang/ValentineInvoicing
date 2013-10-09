<div class="paymentTypes form">
<?php echo $this->Form->create('PaymentType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Payment Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PaymentType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PaymentType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Payment Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
	</ul>
</div>
