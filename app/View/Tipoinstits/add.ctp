<div class="tipoinstits form">
<?php echo $this->Form->create('Tipoinstit'); ?>
	<fieldset>
		<legend><?php echo __('Add Tipoinstit'); ?></legend>
	<?php
		echo $this->Form->input('jurisdiccion_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tipoinstits'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Instits'), array('controller' => 'instits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instit'), array('controller' => 'instits', 'action' => 'add')); ?> </li>
	</ul>
</div>
