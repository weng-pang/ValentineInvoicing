<div class="cusomters view">
<h2><?php echo __('Cusomter'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cusomter['Cusomter']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Identifer'); ?></dt>
		<dd>
			<?php echo h($cusomter['Cusomter']['identifer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($cusomter['Cusomter']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($cusomter['Cusomter']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enabled'); ?></dt>
		<dd>
			<?php echo h($cusomter['Cusomter']['enabled']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cusomter'), array('action' => 'edit', $cusomter['Cusomter']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cusomter'), array('action' => 'delete', $cusomter['Cusomter']['id']), null, __('Are you sure you want to delete # %s?', $cusomter['Cusomter']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cusomters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cusomter'), array('action' => 'add')); ?> </li>
	</ul>
</div>
