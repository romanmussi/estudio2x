<div class="departamentos view">
<h2><?php  echo __('Departamento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($departamento['Departamento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jurisdiccion'); ?></dt>
		<dd>
			<?php echo h($departamento['Jurisdiccion']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($departamento['Departamento']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Departamento'), array('action' => 'edit', $departamento['Departamento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Departamento'), array('action' => 'delete', $departamento['Departamento']['id']), null, __('Are you sure you want to delete # %s?', $departamento['Departamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Localidades'); ?></h3>
	<?php if (!empty($departamento['Localidad'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($departamento['Localidad'] as $localidad): ?>
		<tr>
			<td><?php echo $localidad['id']; ?></td>
			<td><?php echo $localidad['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'localidades', 'action' => 'view', $localidad['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'localidades', 'action' => 'edit', $localidad['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'localidades', 'action' => 'delete', $localidad['id']), null, __('Are you sure you want to delete # %s?', $localidad['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Localidad'), array('controller' => 'localidades', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
