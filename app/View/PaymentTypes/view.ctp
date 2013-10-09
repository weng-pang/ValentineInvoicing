<div class="paymentTypes view">
<h2><?php echo __('Payment Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($paymentType['PaymentType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($paymentType['PaymentType']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Payment Type'), array('action' => 'edit', $paymentType['PaymentType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Payment Type'), array('action' => 'delete', $paymentType['PaymentType']['id']), null, __('Are you sure you want to delete # %s?', $paymentType['PaymentType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Payments'); ?></h3>
	<?php if (!empty($paymentType['Payment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Payment Type Id'); ?></th>
		<th><?php echo __('Sum'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($paymentType['Payment'] as $payment): ?>
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
