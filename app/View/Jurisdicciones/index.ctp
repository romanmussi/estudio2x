<div id="view1col">
	<h2><?php echo __('Jurisdicciones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($jurisdicciones as $jurisdiccion): ?>
	<tr>
		<td><?php echo h($jurisdiccion['Jurisdiccion']['id']); ?>&nbsp;</td>
		<td><?php echo h($jurisdiccion['Jurisdiccion']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $jurisdiccion['Jurisdiccion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $jurisdiccion['Jurisdiccion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $jurisdiccion['Jurisdiccion']['id']), null, __('Are you sure you want to delete # %s?', $jurisdiccion['Jurisdiccion']['id'])); ?>
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
            <li><?php echo $this->Html->link(__('New Jurisdiccion'), array('action' => 'add')); ?></li>
        </ul>
    </div>
</div>