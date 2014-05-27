<div id="view1col">
    <h2><?php echo __('Tipoinstits'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th><?php echo $this->Paginator->sort('jurisdiccion_id'); ?></th>
        </tr>
	<?php
	foreach ($tipoinstits as $tipoinstit): ?>
        <tr>
            <td><?php echo h($tipoinstit['Tipoinstit']['id']); ?>&nbsp;</td>
            <td><?php echo h($tipoinstit['Tipoinstit']['name']); ?>&nbsp;</td>
            <td><?php echo h($tipoinstit['Jurisdiccion']['name']); ?>&nbsp;</td>
        </tr>
<?php endforeach; ?>
    </table>
    <p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>
    </p>
    <div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
    </div>
</div>