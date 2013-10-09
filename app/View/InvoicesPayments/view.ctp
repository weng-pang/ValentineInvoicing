<div class="invoicesPayments view">
<h2><?php echo __('Invoices Payment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($invoicesPayment['InvoicesPayment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($invoicesPayment['Invoice']['id'], array('controller' => 'invoices', 'action' => 'view', $invoicesPayment['Invoice']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($invoicesPayment['Payment']['id'], array('controller' => 'payments', 'action' => 'view', $invoicesPayment['Payment']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Invoices Payment'), array('action' => 'edit', $invoicesPayment['InvoicesPayment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Invoices Payment'), array('action' => 'delete', $invoicesPayment['InvoicesPayment']['id']), null, __('Are you sure you want to delete # %s?', $invoicesPayment['InvoicesPayment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices Payments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoices Payment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
	</ul>
</div>
