<?php //debug($localidades); ?>
<div id="view1col">
<!--<div class="localidades index">-->
	<h2><?php echo __('Localidades'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('departamento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($localidades as $localidad): ?>
	<tr>
		<td><?php echo h($localidad['Localidad']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($localidad['Departamento']['name'], array('controller' => 'departamentos', 'action' => 'view', $localidad['Departamento']['id'])); ?>
		</td>
		<td><?php echo h($localidad['Localidad']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $localidad['Localidad']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $localidad['Localidad']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $localidad['Localidad']['id']), null, __('Are you sure you want to delete # %s?', $localidad['Localidad']['id'])); ?>
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
<div>
	<h4><?php echo __('Actions'); ?></h4>
	<ul>
		<li><?php echo $this->Html->link(__('New Localidad'), array('action' => 'add')); ?></li>
	</ul>
</div>
</div>