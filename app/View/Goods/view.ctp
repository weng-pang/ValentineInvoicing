<div class="goods view">
<h2><?php echo __('Good'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($good['Good']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($good['Good']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($good['Good']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Good'), array('action' => 'edit', $good['Good']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Good'), array('action' => 'delete', $good['Good']['id']), null, __('Are you sure you want to delete # %s?', $good['Good']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Goods'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Good'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Items'); ?></h3>
	<?php if (!empty($good['Item'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Invoice Id'); ?></th>
		<th><?php echo __('Good Id'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th><?php echo __('Variation'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($good['Item'] as $item): ?>
		<tr>
			<td><?php echo $item['id']; ?></td>
			<td><?php echo $item['invoice_id']; ?></td>
			<td><?php echo $item['good_id']; ?></td>
			<td><?php echo $item['quantity']; ?></td>
			<td><?php echo $item['variation']; ?></td>
			<td><?php echo $item['description']; ?></td>
			<td><?php echo $item['comment']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'items', 'action' => 'view', $item['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'items', 'action' => 'edit', $item['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'items', 'action' => 'delete', $item['id']), null, __('Are you sure you want to delete # %s?', $item['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
