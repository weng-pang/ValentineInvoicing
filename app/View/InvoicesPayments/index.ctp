<div class="invoicesPayments index">
	<h2><?php echo __('Invoices Payments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('invoice_id'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($invoicesPayments as $invoicesPayment): ?>
	<tr>
		<td><?php echo h($invoicesPayment['InvoicesPayment']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($invoicesPayment['Invoice']['id'], array('controller' => 'invoices', 'action' => 'view', $invoicesPayment['Invoice']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($invoicesPayment['Payment']['id'], array('controller' => 'payments', 'action' => 'view', $invoicesPayment['Payment']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $invoicesPayment['InvoicesPayment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $invoicesPayment['InvoicesPayment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $invoicesPayment['InvoicesPayment']['id']), null, __('Are you sure you want to delete # %s?', $invoicesPayment['InvoicesPayment']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Invoices Payment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
	</ul>
</div>
