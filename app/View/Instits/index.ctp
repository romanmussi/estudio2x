<div id="view1col">
    <h2><?php echo __('Instits'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('cue'); ?></th>
            <th><?php echo $this->Paginator->sort('anexo'); ?></th>
            <th><?php echo $this->Paginator->sort('nombre'); ?></th>
            <th><?php echo $this->Paginator->sort('nroinstit'); ?></th>
            <th><?php echo $this->Paginator->sort('direccion'); ?></th>
            <th><?php echo $this->Paginator->sort('localidad_id'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
	<?php
	foreach ($instits as $instit): ?>
        <tr>
            <td><?php echo h($instit['Instit']['id']); ?>&nbsp;</td>
            <td><?php echo h($instit['Instit']['cue']); ?>&nbsp;</td>
            <td><?php echo h($instit['Instit']['anexo']); ?>&nbsp;</td>
            <td><?php echo h($instit['Instit']['nombre']); ?>&nbsp;</td>
            <td><?php echo h($instit['Instit']['nroinstit']); ?>&nbsp;</td>
            <td><?php echo h($instit['Instit']['direccion']); ?>&nbsp;</td>
            <td>
			<?php echo $this->Html->link($instit['Localidad']['name'], array('controller' => 'localidades', 'action' => 'view', $instit['Localidad']['id'])); ?>
            </td>
            <td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $instit['Instit']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $instit['Instit']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $instit['Instit']['id']), null, __('Are you sure you want to delete # %s?', $instit['Instit']['id'])); ?>
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
            <li><?php echo $this->Html->link(__('New Instit'), array('action' => 'add')); ?></li>
        </ul>
    </div>
</div>