<div class="tipoinstits form">
<?php echo $this->Form->create('Tipoinstit'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tipoinstit'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('jurisdiccion_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tipoinstit.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Tipoinstit.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tipoinstits'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Instits'), array('controller' => 'instits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instit'), array('controller' => 'instits', 'action' => 'add')); ?> </li>
	</ul>
</div>
