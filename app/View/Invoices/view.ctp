<div class="invoices view">
<h2><?php echo __('Invoice'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($invoice['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $invoice['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Promised'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['promised']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Staff'); ?></dt>
		<dd>
			<?php echo $this->Html->link($invoice['Staff']['name'], array('controller' => 'staffs', 'action' => 'view', $invoice['Staff']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remark'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['remark']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sender'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['sender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Receiver'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['receiver']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sender Contact'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['sender_contact']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Receiver Contact'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['receiver_contact']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['mobile']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Invoice'), array('action' => 'edit', $invoice['Invoice']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Invoice'), array('action' => 'delete', $invoice['Invoice']['id']), null, __('Are you sure you want to delete # %s?', $invoice['Invoice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Items'); ?></h3>
	<?php if (!empty($invoice['Item'])): ?>
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
	<?php foreach ($invoice['Item'] as $item): ?>
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
<div class="related">
	<h3><?php echo __('Related Transactions'); ?></h3>
	<?php if (!empty($invoice['Transaction'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Staff Id'); ?></th>
		<th><?php echo __('Invoice Id'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($invoice['Transaction'] as $transaction): ?>
		<tr>
			<td><?php echo $transaction['id']; ?></td>
			<td><?php echo $transaction['staff_id']; ?></td>
			<td><?php echo $transaction['invoice_id']; ?></td>
			<td><?php echo $transaction['content']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'transactions', 'action' => 'view', $transaction['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'transactions', 'action' => 'edit', $transaction['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'transactions', 'action' => 'delete', $transaction['id']), null, __('Are you sure you want to delete # %s?', $transaction['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Payments'); ?></h3>
	<?php if (!empty($invoice['Payment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Payment Type Id'); ?></th>
		<th><?php echo __('Sum'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($invoice['Payment'] as $payment): ?>
		<tr>
			<td><?php echo $payment['id']; ?></td>
			<td><?php echo $payment['payment_type_id']; ?></td>
			<td><?php echo $payment['sum']; ?></td>
			<td><?php echo $payment['comment']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'payments', 'action' => 'view', $payment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'payments', 'action' => 'edit', $payment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'payments', 'action' => 'delete', $payment['id']), null, __('Are you sure you want to delete # %s?', $payment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
