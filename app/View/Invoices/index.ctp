<div class="invoices index">
	<h2><?php echo __('Invoices'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('no'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('promised'); ?></th>
			<th><?php echo $this->Paginator->sort('staff_id'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('remark'); ?></th>
			<th><?php echo $this->Paginator->sort('sender'); ?></th>
			<th><?php echo $this->Paginator->sort('receiver'); ?></th>
			<th><?php echo $this->Paginator->sort('sender_contact'); ?></th>
			<th><?php echo $this->Paginator->sort('receiver_contact'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('mobile'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($invoices as $invoice): ?>
	<tr>
		<td><?php echo h($invoice['Invoice']['id']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['no']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($invoice['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $invoice['Customer']['id'])); ?>
		</td>
		<td><?php echo h($invoice['Invoice']['created']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['promised']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($invoice['Staff']['name'], array('controller' => 'staffs', 'action' => 'view', $invoice['Staff']['id'])); ?>
		</td>
		<td><?php echo h($invoice['Invoice']['address']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['remark']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['sender']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['receiver']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['sender_contact']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['receiver_contact']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['email']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['mobile']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $invoice['Invoice']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $invoice['Invoice']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $invoice['Invoice']['id']), null, __('Are you sure you want to delete # %s?', $invoice['Invoice']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Invoice'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Staffs'), array('controller' => 'staffs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Staff'), array('controller' => 'staffs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
	</ul>
</div>
