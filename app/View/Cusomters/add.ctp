<div class="cusomters form">
<?php echo $this->Form->create('Cusomter'); ?>
	<fieldset>
		<legend><?php echo __('Add Cusomter'); ?></legend>
	<?php
		echo $this->Form->input('identifer');
		echo $this->Form->input('name');
		echo $this->Form->input('comment');
		echo $this->Form->input('enabled');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cusomters'), array('action' => 'index')); ?></li>
	</ul>
</div>
