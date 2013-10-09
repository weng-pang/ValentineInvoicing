<div class="staffs view">
<h2><?php echo __('Staff'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($staff['Staff']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($staff['Staff']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Staff'), array('action' => 'edit', $staff['Staff']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Staff'), array('action' => 'delete', $staff['Staff']['id']), null, __('Are you sure you want to delete # %s?', $staff['Staff']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Staffs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Staff'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Invoices'); ?></h3>
	<?php if (!empty($staff['Invoice'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('No'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Promised'); ?></th>
		<th><?php echo __('Staff Id'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Remark'); ?></th>
		<th><?php echo __('Sender'); ?></th>
		<th><?php echo __('Receiver'); ?></th>
		<th><?php echo __('Sender Contact'); ?></th>
		<th><?php echo __('Receiver Contact'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Mobile'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($staff['Invoice'] as $invoice): ?>
		<tr>
			<td><?php echo $invoice['id']; ?></td>
			<td><?php echo $invoice['no']; ?></td>
			<td><?php echo $invoice['customer_id']; ?></td>
			<td><?php echo $invoice['created']; ?></td>
			<td><?php echo $invoice['promised']; ?></td>
			<td><?php echo $invoice['staff_id']; ?></td>
			<td><?php echo $invoice['address']; ?></td>
			<td><?php echo $invoice['remark']; ?></td>
			<td><?php echo $invoice['sender']; ?></td>
			<td><?php echo $invoice['receiver']; ?></td>
			<td><?php echo $invoice['sender_contact']; ?></td>
			<td><?php echo $invoice['receiver_contact']; ?></td>
			<td><?php echo $invoice['email']; ?></td>
			<td><?php echo $invoice['mobile']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'invoices', 'action' => 'view', $invoice['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'invoices', 'action' => 'edit', $invoice['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'invoices', 'action' => 'delete', $invoice['id']), null, __('Are you sure you want to delete # %s?', $invoice['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Transactions'); ?></h3>
	<?php if (!empty($staff['Transaction'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Staff Id'); ?></th>
		<th><?php echo __('Invoice Id'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($staff['Transaction'] as $transaction): ?>
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
