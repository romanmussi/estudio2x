<div class="tipoinstits index">
	<h2><?php echo __('Tipoinstits'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('jurisdiccion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($tipoinstits as $tipoinstit): ?>
	<tr>
		<td><?php echo h($tipoinstit['Tipoinstit']['id']); ?>&nbsp;</td>
		<td><?php echo h($tipoinstit['Tipoinstit']['jurisdiccion_id']); ?>&nbsp;</td>
		<td><?php echo h($tipoinstit['Tipoinstit']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tipoinstit['Tipoinstit']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tipoinstit['Tipoinstit']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tipoinstit['Tipoinstit']['id']), null, __('Are you sure you want to delete # %s?', $tipoinstit['Tipoinstit']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tipoinstit'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Instits'), array('controller' => 'instits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instit'), array('controller' => 'instits', 'action' => 'add')); ?> </li>
	</ul>
</div>
