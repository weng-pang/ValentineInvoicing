<div class="items view">
<h2><?php echo __('Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($item['Item']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($item['Invoice']['id'], array('controller' => 'invoices', 'action' => 'view', $item['Invoice']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Good'); ?></dt>
		<dd>
			<?php echo $this->Html->link($item['Good']['name'], array('controller' => 'goods', 'action' => 'view', $item['Good']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($item['Item']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Variation'); ?></dt>
		<dd>
			<?php echo h($item['Item']['variation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($item['Item']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($item['Item']['comment']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item'), array('action' => 'edit', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item'), array('action' => 'delete', $item['Item']['id']), null, __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Goods'), array('controller' => 'goods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Good'), array('controller' => 'goods', 'action' => 'add')); ?> </li>
	</ul>
</div>
